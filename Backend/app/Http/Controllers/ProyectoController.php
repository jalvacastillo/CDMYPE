<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;

use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function index() {
       
        try {

            $proyectos = Proyecto::orderBy('id','dsc')->paginate(7);

            return Response()->json($proyectos, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $proyecto = Proyecto::find($id);
            return Response()->json($proyecto, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(ProyectoRequest $request)
    {
        try {

            if($request->id){
                $proyecto = Proyecto::find($request->id);
            }
            else{
                $proyecto = new Proyecto;
            }

            
            $proyecto->fill($request->all());
            $proyecto->slug  = str_slug($request->titulo, '-');
            $proyecto->save();

            return Response()->json($proyecto, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $proyecto = Proyecto::find($id);
            $proyecto->delete();

            return Response()->json($proyecto, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }
}
