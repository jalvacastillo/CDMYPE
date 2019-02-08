<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresas\IndicadorRequest;
use Illuminate\Http\Request;
use App\Models\Empresas\Indicador;

class IndicadoresController extends Controller
{
    

    public function store(IndicadorRequest $request)
    {
        if($request->id){
            $indicador = Indicador::findOrFail($request->id);
        }
        else{
            $indicador = new Indicador;
        }
        
        $indicador->fill($request->all());
        $indicador->save();

        return Response()->json($indicador, 200);

    }

    public function delete($id)
    {
        $indicador = Indicador::findOrFail($id);
        $indicador->delete();

        return Response()->json($indicador, 201);

    }


}
