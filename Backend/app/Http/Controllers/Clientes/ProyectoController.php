<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClienteProyectoRequest;
use App\Models\Cliente\Proyecto;
use App\Models\Cliente\Accion;

class ProyectoController extends Controller
{
    

    public function index($id) {
       
        try {

            $proyectos = Proyecto::where('cliente_id', $id)->orderBy('id','dsc')->paginate(7);
            return Response()->json($proyectos, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $proyecto = Proyecto::where('cliente_id', $id)->with('acciones')->first();
            return Response()->json($proyecto, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    // public function search($txt) {
    //     try {

    //         $proyecto = Proyecto::where('nombre', 'like' ,'%' . $txt . '%')->get();
    //         return Response()->json($proyecto, 200);
            
    //     } catch (Exception $e) {
    //         return Response()->json($e, 500);
    //     }
    // }


    public function store(ClienteProyectoRequest $request)
    {
        try {

            if($request->id){
                $proyecto = Proyecto::find($request->id);
            }
            else{
                $proyecto = new Proyecto;
            }
            
            $proyecto->fill($request->all());
            $proyecto->save();

            foreach ($proyecto->acciones as $a) {
                $accion =  Accion::find($a->id);
                $accion->delete();
            }

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
