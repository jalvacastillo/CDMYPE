<?php

namespace App\Http\Controllers\Actividades;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actividades\ActividadRequest;
use App\Models\Actividades\Actividad;

class ActividadesController extends Controller
{
    public function index() {
       
        $actividades = Actividad::orderBy('id','dsc')->with('asesores')->paginate(7);

        return Response()->json($actividades, 200);
            
    }

    public function search($txt) {

        $actividades = Actividad::where('nombre', 'like' ,'%' . $txt . '%')->with('asesores')->paginate(7);

        return Response()->json($actividades, 200);

    }

    public function read($id) {

        $proyecto = Actividad::where('id', $id)->with('asesores')
                                ->with(array('aplicaciones' => function($query) {
                                    $query->orderBy('estado', 'desc');
                                }))
                                ->firstOrFail();
        return Response()->json($proyecto, 200);
            
    }

    public function store(ActividadRequest $request)
    {

        if($request->id){
            $proyecto = Actividad::findOrFail($request->id);
        }
        else{
            $proyecto = new Actividad;
        }

        
        $proyecto->fill($request->all());
        $proyecto->save();

        return Response()->json($proyecto, 200);

    }

    public function delete($id)
    {
        $proyecto = Actividad::findOrFail($id);
        $proyecto->delete();

        return Response()->json($proyecto, 201);

    }
}
