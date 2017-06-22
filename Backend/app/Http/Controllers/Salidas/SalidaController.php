<?php

namespace App\Http\Controllers\Salidas;

use App\Http\Controllers\Controller;

use App\Http\Requests\SalidaRequest;
use App\Models\Salidas\Salida;

class SalidaController extends Controller
{
    

    public function index() {
       
        try {

            $salidas = Salida::orderBy('id','dsc')->paginate(7);

            return Response()->json($salidas, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $salida = Salida::where('id',$id)->with('asesores')->first();
            return Response()->json($salida, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(SalidaRequest $request)
    {
        try {

            if($request->id){
                $salida = Salida::find($request->id);
            }
            else{
                $salida = new Salida;
            }
            
            $salida->fill($request->all());
            $salida->save();

            return Response()->json($salida, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $salida = Salida::find($id);
            $salida->delete();

            return Response()->json($salida, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
