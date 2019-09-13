<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresas\ProductoRequest;
use App\Models\Empresas\Producto;
use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{
    
    public function store(ProductoRequest $request)
    {
        $request->validate([
			'empresa_id'    =>'required',
			'nombre' 		=>'required',
			'precio' 	    =>'required',
            'descripcion' 	=>'required',
            'file'       	=>'required',
			
		]);

        if($request->id){
            $producto = Producto::findOrFail($request->id);
        }
        else{
            $producto = new Producto;
        }
        $producto->fill($request->all());
        if ($request->hasFile('file')) {
            if ($request->id && $producto->img) {
                Storage::delete($producto->img);
            }
           $nombre = $request->file->store('empresa/productos');
           $producto->img = $nombre;
        }
        
        
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
