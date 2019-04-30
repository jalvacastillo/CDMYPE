<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Indicador;

class IndicadoresController extends Controller
{
    

    public function store(Request $request)
    {
        $request->validate([
            'empresa_id'        => 'required',
            'venta_nacional'    => 'required',
            'usuario_id'        => 'required',
        ]);

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
