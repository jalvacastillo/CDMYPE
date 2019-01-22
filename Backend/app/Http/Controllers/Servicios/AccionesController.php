<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Servicios\AccionRequest;
use App\Models\Servicios\Accion;

class AccionesController extends Controller
{
    

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
        foreach ($accion->indicadores as $indicador) {
            $indicador->delete();
        }
        $accion->delete();

        return Response()->json($accion, 201);

    }


}
