<?php

namespace App\Http\Controllers\Diagnosticos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnosticos\SubcategoriaRequest;
use App\Models\Diagnosticos\Subcategoria;

class SubcategoriasController extends Controller
{


    public function store(SubcategoriaRequest $request)
    {

        if($request->id){
            $categoria = Subcategoria::findOrFail($request->id);
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
        $categoria = Subcategoria::findOrFail($id);
        $categoria->delete();

        return Response()->json($categoria, 201);

    }
}
