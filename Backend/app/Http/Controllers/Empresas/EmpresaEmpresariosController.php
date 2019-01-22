<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresas\EmpresaEmpresarioRequest;
use App\Models\Empresas\EmpresaEmpresario;

class EmpresaEmpresariosController extends Controller
{
    
    public function store(EmpresaEmpresarioRequest $request)
    {
        if($request->id){
            $producto = EmpresaEmpresario::findOrFail($request->id);
        }
        else{
            $producto = new EmpresaEmpresario;
        }
        
        $producto->fill($request->all());
        $producto->save();

        return Response()->json($producto, 200);

    }

    public function delete($id)
    {
        $producto = EmpresaEmpresario::findOrFail($id);
        $producto->delete();

        return Response()->json($producto, 201);

    }


}
