<?php

namespace App\Http\Controllers\Proyectos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Proyectos\AplicacionRequest;
use App\Models\Proyectos\Aplicacion;

class AplicacionesController extends Controller
{


    public function store(AplicacionRequest $request)
    {

        if($request->id){
            $aplicacion = Aplicacion::findOrFail($request->id);
        }
        else{
            $aplicacion = new Proyecto;
        }

        
        $aplicacion->fill($request->all());
        $aplicacion->save();

        return Response()->json($aplicacion, 200);

    }

    public function delete($id)
    {
        $aplicacion = Aplicacion::findOrFail($id);
        $aplicacion->delete();

        return Response()->json($aplicacion, 201);

    }
}
