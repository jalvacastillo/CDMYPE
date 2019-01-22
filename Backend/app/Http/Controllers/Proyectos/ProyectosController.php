<?php

namespace App\Http\Controllers\Proyectos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Proyectos\ProyectoRequest;
use App\Models\Proyectos\Proyecto;

class ProyectosController extends Controller
{
    public function index() {
       
        $proyectos = Proyecto::orderBy('id','dsc')->with('asesores', 'empresas')->paginate(7);

        return Response()->json($proyectos, 200);
            
    }

    public function search($txt) {

        $proyectos = Proyecto::where('nombre', 'like' ,'%' . $txt . '%')->with('asesores', 'empresas')->paginate(7);

        return Response()->json($proyectos, 200);

    }

    public function read($id) {

        $proyecto = Proyecto::where('id', $id)->with('asesores', 'empresas')
                                ->with(array('aplicaciones' => function($query) {
                                    $query->orderBy('estado', 'desc');
                                }))
                                ->firstOrFail();
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
        $proyecto->slug  = str_slug($request->nombre, '-');
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
