<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empresas\Asesoria;

class EmpresaAsesoriasController extends Controller
{
    public function index() {
	   
		$asesorias = Asesoria::orderBy('id','dsc')->paginate(7);

		return Response()->json($asesorias, 200);

    }
    
    public function store(Request $request)
    {

        $request->validate([
            'accion_id'        => 'required',
            'descripcion'      => 'required',
            'fecha'            => 'required'
            
        ]);

        if($request->id){
            $asesoria = Asesoria::findOrFail($request->id);
        }
        else{
            $asesoria = new Asesoria;
        }
        
        $asesoria->fill($request->all());
        $asesoria->save();

        return Response()->json($asesoria, 200);

    }
    public function read($id) {

		$asesoria = Asesoria::where('id', $id)->with('accion')->firstOrFail();
		return Response()->json($asesoria, 200);

	}

    public function delete($id)
    {
        $asesoria = Asesoria::findOrFail($id);
        $asesoria->delete();

        return Response()->json($asesoria, 201);

    }



}
