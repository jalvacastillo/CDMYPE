<?php

namespace App\Http\Controllers\Diagnosticos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnosticos\ValorRequest;
use App\Models\Diagnosticos\Valor;

class ValoresController extends Controller
{


    public function store(ValorRequest $request)
    {

        if($request->id){
            $valor = Valor::findOrFail($request->id);
        }
        else{
            $valor = new Valor;
        }

        
        $valor->fill($request->all());
        $valor->save();

        return Response()->json($valor, 200);

    }

    public function delete($id)
    {
        $valor = Valor::findOrFail($id);
        $valor->delete();

        return Response()->json($valor, 201);

    }
}
