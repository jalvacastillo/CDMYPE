<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Empresas\EmpresaEmpresario;

class EmpresaEmpresariosController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'empresa_id'        => 'required',
            'empresario_id'     => 'required',
            'tipo'              => 'required',
        ]);

        if($request->id){
            $empresario = EmpresaEmpresario::findOrFail($request->id);
        }
        else{
            $empresario = new EmpresaEmpresario;
        }
        
        $empresario->fill($request->all());
        $empresario->save();

        return Response()->json($empresario, 200);

    }

    public function delete($id)
    {
        $empresario = EmpresaEmpresario::findOrFail($id);
        $empresario->delete();

        return Response()->json($empresario, 201);

    }


}
