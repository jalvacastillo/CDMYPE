<?php

namespace App\Http\Controllers\Proyectos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Proyectos\EmpresaRequest;
use App\Models\Proyectos\Empresa;

class EmpresasController extends Controller
{


    public function store(EmpresaRequest $request)
    {

        if($request->id){
            $empresa = Empresa::findOrFail($request->id);
        }
        else{
            $empresa = new Proyecto;
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
}
