<?php

namespace App\Http\Controllers\Diagnosticos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnosticos\PreguntaRequest;
use App\Models\Diagnosticos\Pregunta;

class PreguntasController extends Controller
{


    public function store(PreguntaRequest $request)
    {

        if($request->id){
            $empresa = Pregunta::findOrFail($request->id);
        }
        else{
            $empresa = new Proyecto;
        }

        
        $empresa->fill($request->all());
        $empresa->save();

        return Response()->json($empresa, 200);

    }

    public function delete($id)
    {
        $empresa = Pregunta::findOrFail($id);
        $empresa->delete();

        return Response()->json($empresa, 201);

    }
}
