<?php

namespace App\Http\Controllers\Diagnosticos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnosticos\CategoriaRequest;
use App\Models\Diagnosticos\Categoria;

class CategoriasController extends Controller
{


    public function index($diagnostico_id)
    {

        $categorias = Categoria::where('diagnostico_id', $diagnostico_id)->with('subcategorias')->get();
        
        return Response()->json($categorias, 200);

    }

    public function store(CategoriaRequest $request)
    {

        if($request->id){
            $categoria = Categoria::findOrFail($request->id);
        }
        else{
            $categoria = new Proyecto;
        }

        
        $categoria->fill($request->all());
        $categoria->save();

        return Response()->json($categoria, 200);

    }

    public function delete($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return Response()->json($categoria, 201);

    }
}
