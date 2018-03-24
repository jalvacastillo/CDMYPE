<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pagina\ResultadoRequest;
use App\Models\Pagina\Resultado;

class ResultadoController extends Controller
{
    public function index() {
       
        $resultados = Resultado::orderBy('id','dsc')->paginate(7);

        return Response()->json($resultados, 200);

    }

    public function read($id) {

        $resultado = Resultado::findOrFail($id);
        return Response()->json($resultado, 200);

    }

    public function store(ResultadoRequest $request)
    {
        if($request->id){
            $resultado = Resultado::findOrFail($request->id);
        }
        else{
            $resultado = new Resultado;
        }

        $resultado->fill($request->all());
        $resultado->save();

        return Response()->json($resultado, 200);

    }

    public function delete($id)
    {
        $resultado = Resultado::findOrFail($id);
        $resultado->delete();

        return Response()->json($resultado, 201);

    }


}
