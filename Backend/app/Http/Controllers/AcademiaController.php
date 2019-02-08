<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mails\AplicacionActividad;
use File;
use Auth;
use App\User;
use App\Models\Proyectos\Proyecto;
use App\Models\Proyectos\Aplicacion;

class AcademiaController extends Controller
{
    
    public function proyectos(){
        $proyectos = Proyecto::where('estado', 'Activo')->orderBy('id','asc')->paginate(8);
        return view('proyectos.index', compact('proyectos'));  
    }

    public function proyecto($slug, $id){
        $proyecto = Proyecto::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        
        $usuario = Auth::user();
        
        if ($usuario) {
            $aplicacion = Aplicacion::where('proyecto_id', $proyecto->id)->where('usuario_id', $usuario->id)->first();
        }else{
            $aplicacion = [];
        }
        

        return view('proyectos.proyecto', compact('proyecto', 'usuario', 'aplicacion'));  
    }

    public function filtrar(Request $request){

        $empresas = Proyecto::where('estado', 'Activo')->orderBy('id','asc')
                            ->orwhere('nombre', 'like', '%' . $request->parametro .'%')
                            ->orwhere('tipo', 'like', '%' . $request->parametro .'%')
                            ->orwhere('categoria', 'like', '%' . $request->parametro .'%')
                            ->with('empresarios')->paginate(12);
                            
        return view('empresas.index', compact('empresas'));   
    }

    public function aplicacion(Request $request, $slug, $id){

        $proyecto = Proyecto::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        $usuario = Auth::user();

        $request['usuario_id']  = $usuario->id;
        $request['proyecto_id'] = $proyecto->id;
        $request['estado']      = 'En Revisión';
        
        $request->validate([
            'proyecto_id'   => 'required',
            'estado'   => 'required',
            'usuario_id'    => 'required',
        ]);

        $aplicacion = Aplicacion::where('proyecto_id', $proyecto->id)->where('usuario_id', $usuario->id)->first();

        if (!$aplicacion) {
            $aplicacion = new Aplicacion;
            $aplicacion->fill($request->all());
            $aplicacion->save();
        }

        // Mail::to($usuario->email)->send(new AplicacionActividad($aplicacion));

        return view('proyectos.proyecto', compact('proyecto', 'usuario', 'aplicacion'));  
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