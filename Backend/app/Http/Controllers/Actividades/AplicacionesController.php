<?php

namespace App\Http\Controllers\Actividades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividades\Aplicacion;

class AplicacionesController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'actividad_id'  => 'required',
            'estado'        => 'required',
            
        ]);

        if($request->id){
            $aplicacion = Aplicacion::findOrFail($request->id);
        }
        else{
            $aplicacion = new Aplicacion;
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
