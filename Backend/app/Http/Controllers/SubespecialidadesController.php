<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubespecialidadRequest;

use App\Models\Subespecialidad;

class SubespecialidadesController extends Controller
{
    public function index() {
       
        $especialidades = Subespecialidad::orderBy('id','dsc')->get();

        return Response()->json($especialidades, 200);
            
    }

    public function read($id) {

        $especialidad = Subespecialidad::findOrFail($id);
        return Response()->json($especialidad, 200);
            
    }

    public function store(SubespecialidadRequest $request)
    {

        if($request->id){
            $especialidad = Subespecialidad::findOrFail($request->id);
        }
        else{
            $especialidad = new Subespecialidad;
        }

        
        $especialidad->fill($request->all());
        $especialidad->slug  = str_slug($request->titulo, '-');
        $especialidad->save();

        return Response()->json($especialidad, 200);

    }

    public function delete($id)
    {
        $especialidad = Subespecialidad::findOrFail($id);
        $especialidad->delete();

        return Response()->json($especialidad, 201);

    }
}
