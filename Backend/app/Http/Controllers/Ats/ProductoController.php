<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresas\ProductoRequest;
use App\Models\Empresas\Producto;

class ProductoController extends Controller
{
    
    public function store(ProductoRequest $request)
    {
        if($request->id){
            $producto = Producto::findOrFail($request->id);
        }
        else{
            $producto = new Producto;
        }
        
        $producto->fill($request->all());
        $producto->save();

        return Response()->json($producto, 200);

    }

    public function delete($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return Response()->json($producto, 201);

    }


}
