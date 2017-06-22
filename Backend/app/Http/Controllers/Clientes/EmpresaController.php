<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;

use App\Http\Requests\EmpresaRequest;
use App\Models\Cliente\Empresa;

class EmpresaController extends Controller
{
    

    public function index() {
       
        try {

            $empresas = Empresa::orderBy('id','dsc')->get();

            return Response()->json($empresas, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $empresa = Empresa::find($id);
            return Response()->json($empresa, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }
    }


    public function store(EmpresaRequest $request)
    {
        try {

            if($request->id){
                $empresa = Empresa::find($request->id);
            }
            else{
                $empresa = new Empresa;
            }
            
            $empresa->fill($request->all());
            $empresa->save();

            return Response()->json($empresa, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function eliminar($id)
    {
        try{

            $empresa = Empresa::find($id);
            $empresa->delete();

            return Response()->json($empresa, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
