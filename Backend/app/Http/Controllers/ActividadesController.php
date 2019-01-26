<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Mail;
use Auth;
use App\User;
use App\Models\Actividades\Actividad;
use App\Models\Actividades\Aplicacion;

class ActividadesController extends Controller
{
    
    public function actividades(){
        $actividades = Actividad::where('estado', 'Activo')->orderBy('id','asc')->paginate(8);
        return view('actividades.index', compact('actividades'));  
    }

    public function actividad($slug, $id){
        $actividad = Actividad::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        
        $usuario = Auth::user();
        
        if ($usuario) {
            $aplicacion = Aplicacion::where('actividad_id', $actividad->id)->where('usuario_id', $usuario->id)->first();
        }else{
            $aplicacion = [];
        }
        

        return view('actividades.actividad', compact('actividad', 'usuario', 'aplicacion'));  
    }

    public function filtrar(Request $request){

        // return $request->parametro;

        $empresas = Actividad::where('estado', 'Activo')->orderBy('id','asc')
                            ->orwhere('nombre', 'like', '%' . $request->parametro .'%')
                            ->orwhere('tipo', 'like', '%' . $request->parametro .'%')
                            ->orwhere('categoria', 'like', '%' . $request->parametro .'%')
                            ->with('empresarios')->paginate(12);

        // $empresas = Empresa::where('catalogo', 1)->orderBy('id','asc')
        //                     ->when($request->sector, function($query) use ($request){
        //                         return $query->where('sector', $request->sector);
        //                     })
        //                     ->when($request->municipio, function($query) use ($request){
        //                         return $query->where('municipio', $request->municipio);
        //                     })
        //                     ->with('empresarios')->paginate(12);
                            
        return view('empresas.index', compact('empresas'));   
    }

    public function aplicacion(Request $request, $slug, $id){

        $actividad = Actividad::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        $usuario = Auth::user();

        $request['usuario_id'] = $usuario->id;
        $request['actividad_id'] = $actividad->id;
        $request['estado'] = 'En Revisión';
        
        $request->validate([
            'actividad_id'   => 'required',
            'estado'   => 'required',
            'usuario_id'    => 'required',
        ]);

        $aplicacion = Aplicacion::where('actividad_id', $actividad->id)->where('usuario_id', $usuario->id)->first();

        if (!$aplicacion) {
            $aplicacion = new Aplicacion;
            $aplicacion->fill($request->all());
            $aplicacion->save();
        }

        return view('actividades.actividad', compact('actividad', 'usuario', 'aplicacion'));  
    }

    public function contactosfrm(Request $request){
        try {
            Mail::send('dash.emails.contact', ['request' => $request], function ($m) use ($request) {
                $m->from('cdmype.ilobasco@gmail.com', 'CDMYPE')
                ->to($request['correo'], 'CDMYPE')
                ->subject('CDMYPE');
            });
            
            if ($request->ajax()) {
                return response()->json(['msj' => 'Gracias por escribirnos!']);
            }

            return redirect()->back()->with('message', 'Gracias por escribirnos!');
        } catch (Exception $e) {
            if ($request->ajax()) {
                return response()->json(['msj' => 'No se pudo enviar!']);
            }
            return redirect()->back()->with('message', 'No se pudo enviar!');
        }
    }
}