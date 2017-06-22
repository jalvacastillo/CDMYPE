<?php

namespace App\Http\Controllers\At;

use App\Http\Controllers\Controller;

use App\Http\Requests\AtContratoRequest;
use App\Models\At\Contrato;

class ContratoController extends Controller
{
    

    public function index() {
       
        try {

            $contratos = Contrato::orderBy('id','dsc')->paginate(7);

            return Response()->json($contratos, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function historial($id) {
       
        try {

            $contrato = Contrato::where('id', $id)->orderBy('id','dsc')->with('ats')->first();

            return Response()->json($contrato, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $contrato = Contrato::where('termino_id', $id)->first();
            return Response()->json($contrato, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }


    public function store(AtContratoRequest $request)
    {
        try {

            if($request->id){
                $contrato = Contrato::find($request->id);
            }
            else{
                $contrato = new Contrato;
            }
            
            $contrato->fill($request->all());
            $contrato->save();

            return Response()->json($contrato, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $contrato = Contrato::find($id);
            $contrato->delete();

            return Response()->json($contrato, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
