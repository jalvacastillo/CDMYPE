
<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User as Usuario;

class UsuariosController extends Controller
{
    

    public function index() {
       
        $usuarios = Usuario::orderBy('id','dsc')->paginate(7);

        return Response()->json($usuarios, 200);

    }


    public function read($id) {
        
        $usuario = Usuario::where('id', $id)->firstOrFail();

        return Response()->json($usuario, 200);
    }

    public function search($txt) {

        $usuarios = Usuario::where('name', 'like' ,'%' . $txt . '%')
                            ->orwhere('tipo', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($usuarios, 200);

    }


    public function store(UsuarioRequest $request)
    {
        if($request->id){
            $usuario = Usuario::findOrFail($request->id);
        }
        else{
            $usuario = new Usuario;
        }
        
        if ($request->password && $request->password_confirm && $request->password == $request->password_confirm) {
            $request['password'] = \Hash::make($request->password);
        }else{
            return Response()->json(['message' => 'Verifique la contraseña'], 401);
        }

        
        $usuario->fill($request->all());
        $usuario->save();

        return Response()->json($usuario, 200);


    }

    public function avatar(Request $request){

        $usuario = Usuario::findOrFail($request->id);

        if ($request->hasFile('file')) {
                
                if ($usuario) {
                    $file = $request->file;
                    $ruta = public_path() . '/img/team/';
                    $nombre = time().$file->getClientOriginalName();
                    $file->move($ruta, $nombre);
                    \File::delete($ruta . $usuario->avatar);
                    $usuario->avatar = $nombre;
                    $usuario->save();
                }
            } 
        return Response()->json($usuario, 200);
        
    }

    public function delete($id)
    {
       
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return Response()->json($usuario, 201);

    }

}
