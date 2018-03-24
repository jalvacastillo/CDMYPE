<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cliente\EmpresaRequest;
use App\Models\Cliente\Empresa;

class EmpresaController extends Controller
{
    

    public function index() {
       
        $empresas = Empresa::orderBy('id','dsc')->paginate(7);

        return Response()->json($empresas, 200);

    }


    public function read($id) {

        $empresa = Empresa::findOrFail($id);
        return Response()->json($empresa, 200);

    }


    public function store(EmpresaRequest $request)
    {
        if($request->id){
            $empresa = Empresa::findOrFail($request->id);
        }
        else{
            $empresa = new Empresa;
        }
        
        $empresa->fill($request->all());
        $empresa->save();

        return Response()->json($empresa, 200);

    }

    public function delete($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return Response()->json($empresa, 201);

    }

    public function search($txt) {

        $empresas = Empresa::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($empresas, 200);

    }

}
