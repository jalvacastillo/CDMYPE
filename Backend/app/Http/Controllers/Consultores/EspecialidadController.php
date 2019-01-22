<?php

namespace App\Http\Controllers\Consultores;

use App\Http\Requests\Consultor\EspecialidadRequest;

use App\Models\Consultores\Especialidad;

class EspecialidadController extends Controller
{
    public function index() {
       
        $especialidades = Especialidad::orderBy('id','dsc')->get();

        return Response()->json($especialidades, 200);
            
    }

    public function read($id) {

        $especialidad = Especialidad::findOrFail($id);
        return Response()->json($especialidad, 200);
            
    }

    public function store(EspecialidadRequest $request)
    {

        if($request->id){
            $especialidad = Especialidad::findOrFail($request->id);
        }
        else{
            $especialidad = new Especialidad;
        }

        
        $especialidad->fill($request->all());
        $especialidad->slug  = str_slug($request->titulo, '-');
        $especialidad->save();

        return Response()->json($especialidad, 200);

    }

    public function delete($id)
    {
        $especialidad = Especialidad::findOrFail($id);
        $especialidad->delete();

        return Response()->json($especialidad, 201);

    }
}
