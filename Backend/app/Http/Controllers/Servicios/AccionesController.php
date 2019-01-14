<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Servicios\AccionRequest;
use App\Models\Servicios\Accion;

class AccionesController extends Controller
{
    

    public function index() {
       
        $acciones = Accion::orderBy('id','dsc')->paginate(7);

        return Response()->json($acciones, 200);

    }


    public function search($txt) {

        $acciones = Accion::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($acciones, 200);

    }

    public function read($id) {

        $acciones = Accion::where('id', $id)->with('asesores')->first();
        return Response()->json($acciones, 200);

    }


    public function store(AccionRequest $request)
    {
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

    public function delete($id)
    {
        $accion = Accion::findOrFail($id);
        $accion->delete();

        return Response()->json($accion, 201);

    }


}
