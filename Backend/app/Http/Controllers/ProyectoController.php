<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;

use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index() {
       
        $proyectos = Proyecto::orderBy('id','dsc')->paginate(7);

        return Response()->json($proyectos, 200);
            
    }

    public function read($id) {

        $proyecto = Proyecto::findOrFail($id);
        return Response()->json($proyecto, 200);
            
    }

    public function store(ProyectoRequest $request)
    {

        if($request->id){
            $proyecto = Proyecto::findOrFail($request->id);
        }
        else{
            $proyecto = new Proyecto;
        }

        
        $proyecto->fill($request->all());
        $proyecto->slug  = str_slug($request->titulo, '-');
        $proyecto->save();

        return Response()->json($proyecto, 200);

    }

    public function delete($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return Response()->json($proyecto, 201);

    }
}
