<?php

namespace App\Http\Controllers\Pagina;


use App\Http\Controllers\Controller;
use App\Http\Requests\Pagina\EquipoRequest;
use App\Models\Pagina\Equipo;

class EquipoController extends Controller
{
    public function index() {
       
        $equipos = Equipo::orderBy('id','dsc')->paginate(7);

        return Response()->json($equipos, 200);

    }

    public function read($id) {

        $equipo = Equipo::where('id', $id)->with('usuario', 'metas')->firstOrFail();
        return Response()->json($equipo, 200);

    }

    public function all() {
       
        $equipos = Equipo::orderBy('id','dsc')->get();

        return Response()->json($equipos, 200);

    }

    public function store(EquipoRequest $request)
    {
        if($request->id){
            $equipo = Equipo::findOrFail($request->id);
        }
        else{
            $equipo = new Equipo;
        }

        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/imgs/equipos';
            if ($equipo->img) { \File::delete($ruta . $equipo->img); }
            $file->move($ruta, $request->img);
        } 

        $equipo->fill($request->all());
        $equipo->save();

        return Response()->json($equipo, 200);

    }

    public function delete($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();

        return Response()->json($equipo, 201);

    }

    public function search($txt) {

        $equipos = Equipo::where('titulo', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($equipos, 200);

    }

}
