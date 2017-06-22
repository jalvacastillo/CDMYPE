<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClienteIndicadorRequest;
use App\Models\Cliente\Indicador;

class IndicadorController extends Controller
{
    

    public function index($id) {
       
        try {

            $indicadores = Indicador::where('cliente_id', $id)->orderBy('id','dsc')->paginate(7);

            return Response()->json($indicadores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $indicador = Indicador::find($id);
            return Response()->json($indicador, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    // public function search($txt) {
    //     try {

    //         $indicadores = Indicador::where('nombre', 'like' ,'%' . $txt . '%')->get();
    //         return Response()->json($indicadores, 200);
            
    //     } catch (Exception $e) {
    //         return Response()->json($e, 500);
    //     }
    // }


    public function store(ClienteIndicadorRequest $request)
    {
        try {

            if($request->id){
                $indicador = Indicador::find($request->id);
            }
            else{
                $indicador = new Indicador;
            }
            
            $indicador->fill($request->all());
            $indicador->save();

            return Response()->json($indicador, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $indicador = Indicador::find($id);
            $indicador->delete();

            return Response()->json($indicador, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
