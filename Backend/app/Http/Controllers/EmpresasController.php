<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Empresas\Empresa;
use App\Models\Empresas\Empresario;

class EmpresasController extends Controller
{
        
    public function empresas(){
        $parametro = '';
        $empresas = Empresa::where('catalogo', 1)->orderBy('id','asc')->with('empresarios')->paginate(12);
        // $empresas = Empresa::orderBy('id','asc')->with('empresarios')->paginate(12);
        return view('empresas.index', compact('empresas', 'parametro'));   
    }

    public function empresa($slug, $id){
        $empresa = Empresa::where('catalogo', 1)->where('id', decrypt($id))->with('empresarios')->firstOrFail();
        // $empresa = Empresa::where('id', decrypt($id))->with('empresarios')->firstOrFail();
        return view('empresas.empresa', compact('empresa'));
    }

    public function filtrar(Request $request){

        $parametro = $request->parametro;

        $empresas = Empresa::where('catalogo', 1)->orderBy('id','asc')
                            ->where('nombre', 'like', '%' . $parametro .'%')
                            ->orwhere('sector', 'like', '%' . $parametro .'%')
                            ->orwhere('municipio', 'like', '%' . $parametro .'%')
                            ->with('empresarios')->paginate(12);
                            
        return view('empresas.index', compact('empresas', 'parametro'));   
    }
    // Guia

    public function paso1(Request $request){

        // return 'datos';
        return view('empresas.guia.inicio');

        $empresa = Empresa::findOrCreateBySessionID(\Session::get('empresa_id'));
        \Session::put('empresa_id', $empresa->id);
        
        if ($request->ajax()) {
            return response()->json(['empresa' => $empresa]);
        }

        return view('empresas.registro', compact('empresa'));
    }

    public function paso2(Request $request){
        return view('empresas.guia.necesidad');
        return 'Servicios';

        $table = new EmpresaEmpresario;
        $table->empresa_id = $empresa->id;
        $table->empresario_id = $empresario->id;
        $table->tipo = 'Propietario';
        $table->save();

        if ($request->ajax()) {
            return response()->json(['empresa' => 'Si', 'empresario' => $request['empresario']]);
        }

    }
    
    public function paso3(Request $request){
        return view('empresas.guia.registro');
        return 'Registro';

        return redirect()->back()->with('message', 'Solicitud recibida, pronto nos pondremos en contacto con tigo!');
        $empresa = new Empresa;
    }

}