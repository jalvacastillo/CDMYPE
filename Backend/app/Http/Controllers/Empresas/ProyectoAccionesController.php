<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empresas\Accion;

class ProyectoAccionesController extends Controller
{
    public function index() {
	   
		$acciones = Accion::orderBy('id','dsc')->paginate(7);

		return Response()->json($acciones, 200);

    }
    
    public function store(Request $request)
    {

        $request->validate([
            'proyecto_id'        => 'required',
            'actividad'          => 'required',
            'responsable'        => 'required',
            'categoria'          => 'required',
            'fin'                => 'required'
        ]);

        if($request->id){
            $accion = Accion::findOrFail($request->id);
        }
        else{
            $accion = new Accion;
        }
        
        $accion->fill($request->all());
        $accion->save();

        return Response()->json($accion, 200);

    }
    public function read($id) {

		$accion = Accion::where('id', $id)->with('proyecto')->firstOrFail();
		return Response()->json($accion, 200);

	}

    public function delete($id)
    {
        $accion = Accion::findOrFail($id);
        $accion->delete();

        return Response()->json($accion, 201);

    }

    public function search($txt) {

		$acciones = Accion::where('actividad', 'like' ,'%' . $txt . '%')->paginate(7);
		return Response()->json($acciones, 200);

	}
    


}
