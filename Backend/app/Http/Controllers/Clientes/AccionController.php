<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClienteAccionRequest;
use App\Models\Cliente\Accion;

class AccionController extends Controller
{
    

    public function index($id) {
       
        try {

            $acciones = Accion::where('proyecto_id', $id)->orderBy('id','dsc')->get();
            return Response()->json($acciones, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $accion = Accion::find($id);
            return Response()->json($accion, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    // public function search($txt) {
    //     try {

    //         $accion = Accion::where('nombre', 'like' ,'%' . $txt . '%')->get();
    //         return Response()->json($accion, 200);
            
    //     } catch (Exception $e) {
    //         return Response()->json($e, 500);
    //     }
    // }


    public function store(ClienteAccionRequest $request)
    {
        try {


            $accion = new Accion;
            
            $accion->fill($request->all());
            $accion->save();

            return Response()->json($accion, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $accion = Accion::find($id);
            $accion->delete();

            return Response()->json($accion, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
