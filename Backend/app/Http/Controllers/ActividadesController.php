<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Auth;
use App\Models\Actividades\Actividad;
use App\Models\Actividades\Aplicacion;
use Illuminate\Support\Facades\Mail;
use App\Mail\AplicacionActividad;
use App\User;


class ActividadesController extends Controller
{
    
    public function actividades(){
        $actividades = Actividad::where('estado', '!=', 'Inactivo')->orderBy('fecha_inicio','asc')->paginate(8);
        return view('actividades.index', compact('actividades'));
    }

    public function calendario(Request $request){
        $actividades = Actividad::where('estado', '!=', 'Inactivo')->get();

        $eventos = [];

        foreach ($actividades as $actividad) {
            $eventos[] = array(
                "id"      => $actividad->id,
                "title"   => $actividad->nombre,
                "description"   => $actividad->descripcion,
                "view_url"     => route('actividad', [str_slug($actividad->nombre), encrypt($actividad->id)]),
                "class"   => "event-important",
                "start"   => $actividad->inicio->toDateTimeString(),
                "end"     => $actividad->fin->toDateTimeString(),
            );
        }

        if ($request->ajax()) {
            return response()->json($eventos);
        }
        
        return view('actividades.calendario', compact('actividades'));  
    }

    public function categoria($categoria){
        $actividades = Actividad::where('estado', '!=', 'Inactivo')->where('categoria', 'like', '%'.$categoria.'%')->orderBy('inicio','asc')->paginate(8);
        return view('actividades.index', compact('actividades'));  
    }

    public function tipo($tipo){
        $actividades = Actividad::where('estado', '!=', 'Inactivo')->where('tipo', 'like', '%'.$tipo.'%')->orderBy('inicio','asc')->paginate(8);
        return view('actividades.index', compact('actividades'));  
    }

    public function actividad($slug, $id){
        $actividad = Actividad::where('estado', '!=', 'Inactivo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        
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

        $empresas = Actividad::where('estado', '!=', 'Inactivo')->orderBy('inicio','asc')
                            ->orwhere('nombre', 'like', '%' . $request->parametro .'%')
                            ->orwhere('tipo', 'like', '%' . $request->parametro .'%')
                            ->orwhere('categoria', 'like', '%' . $request->parametro .'%')
                            ->paginate(12);
                            
        return view('empresas.index', compact('empresas'));   
    }

    public function aplicacion(Request $request){

        $request['estado'] = 'En Revisión';
        
        $request->validate([
            'actividad_id'  => 'required',
            'estado'        => 'required',
            'nombre'        => 'required',
            'sexo'          => 'required',
            'empresa'       => 'required',
            'municipio'     => 'required',
            'departamento'  => 'required',


        ]);

        if($request->id){
            $aplicacion = Aplicacion::findOrFail($request->id);
        }
        else{
            $aplicacion = new Aplicacion;
        }
        $aplicacion->fill($request->all());
        $aplicacion->save();


        if ($request->ajax()) {     
            return Response()->json($aplicacion, 200); 
        }
        //return view('actividades.actividad', compact('actividad', 'usuario', 'aplicacion')); 
        
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