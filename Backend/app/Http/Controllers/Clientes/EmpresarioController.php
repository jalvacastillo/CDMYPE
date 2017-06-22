<?php

namespace App\Http\Controllers\Clientes;


use App\Http\Controllers\Controller;

use App\Http\Requests\EmpresarioRequest;
use App\Models\Cliente\Empresario;

class EmpresarioController extends Controller
{

    public function index() {
        try {

            $empresarios = Empresario::orderBy('id','dsc')->get();
            return Response()->json($empresarios, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function read($id) {
        try {

            $empresario = Empresario::find($id);
            return Response()->json($empresario, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }


    public function store(EmpresarioRequest $request)
    {
        try {
            
            if($request->id){
                $empresario = Empresario::find($request->id);
            }
            else{
                $empresario = new Empresario;
            }
            
            $empresario->fill($request->all());
            $empresario->save();

            return Response()->json($empresario, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{
            $empresario = Empresario::find($id);
            $empresario->delete();

            return Response()->json($empresario, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }


}
