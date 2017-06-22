<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente\Cliente;

class ClienteController extends Controller
{
    

    public function index() {
       
        try {

            $clientes = Cliente::orderBy('id','dsc')->with('empresa', 'empresario')->paginate(7);

            return Response()->json($clientes, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function historial($id) {
       
        try {

            $clientes = Cliente::where('id', $id)->orderBy('id','dsc')->with('ats')->first();

            return Response()->json($clientes, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $cliente = Cliente::find($id);
            return Response()->json($cliente, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    // public function search($txt) {
    //     try {

    //         $clientes = Cliente::where('nombre', 'like' ,'%' . $txt . '%')->get();
    //         return Response()->json($clientes, 200);
            
    //     } catch (Exception $e) {
    //         return Response()->json($e, 500);
    //     }
    // }


    public function store(ClienteRequest $request)
    {
        try {

            if($request->id){
                $cliente = Cliente::find($request->id);
            }
            else{
                $cliente = new Cliente;
            }
            
            $cliente->fill($request->all());
            $cliente->save();

            return Response()->json($cliente, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $cliente = Cliente::find($id);
            $cliente->delete();

            return Response()->json($cliente, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
