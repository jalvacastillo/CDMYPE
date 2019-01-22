<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Mail;
use Auth;
use App\User;
use App\Models\Proyectos\Proyecto;
use App\Models\Proyectos\Aplicacion;

class AcademiaController extends Controller
{
    
    public function proyectos(){
        $proyectos = Proyecto::where('estado', 'Activo')->orderBy('id','asc')->paginate(7);
        return view('proyectos.index', compact('proyectos'));  
    }

    public function proyecto($slug, $id){
        $proyecto = Proyecto::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        // return $proyecto;
        return view('proyectos.proyecto', compact('proyecto'));  
    }

    public function aplicar($id){
        $proyecto = Proyecto::where('estado', 'Activo')->with('asesores')->where('id', decrypt($id))->firstOrFail();
        // return $proyecto;
        $usuario = Auth::user();
        return view('proyectos.aplicar', compact('proyecto', 'usuario'));  
    }

    public function aplicacion(Request $request){

        $request['usuario_id'] = Auth::user()->id;
        $request['estado'] = 'Iniciado';
        
        $request->validate([
            'proyecto_id'   => 'required',
            'estado'   => 'required',
            'usuario_id'    => 'required',
        ]);

        if($request->id){
            $aplicacion = Aplicacion::findOrFail($request->id);
        }
        else{
            $aplicacion = new Aplicacion;
        }
        
        $aplicacion->fill($request->all());
        $aplicacion->save();

        // return view('success');
        return 'success';
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