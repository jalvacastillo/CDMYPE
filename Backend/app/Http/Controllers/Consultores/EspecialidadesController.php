<?php

namespace App\Http\Controllers\Consultores;

use App\Http\Controllers\Controller;
use App\Http\Requests\Consultores\EspecialidadRequest;
use App\Models\Consultores\Especialidad;

class EspecialidadesController extends Controller
{

    public function store(EspecialidadRequest $request)
    {

        $especialidad = Especialidad::where('consultor_id', $request->consultor_id)
                                    ->where('especialidad_id', $request->especialidad_id)->first();

        if (!$especialidad) {
            $especialidad = new Especialidad;        
            $especialidad->fill($request->all());
            $especialidad->save();
            return Response()->json($especialidad, 200);
        }

        return Response()->json([], 200);

    }

    public function delete($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->delete();

        return Response()->json($especialidad, 201);

    }
}
