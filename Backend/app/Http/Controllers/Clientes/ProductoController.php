<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cliente\ProductoRequest;
use Illuminate\Http\Request;
use App\Models\Cliente\Producto;

class ProductoController extends Controller
{
    

    public function index() {
       
        $productos = Producto::orderBy('id','dsc')->paginate(7);

        return Response()->json($productos, 200);

    }


    public function read($id) {

        $producto = Producto::where('id', $id)->with('empresa', 'empresario')->first();
        return Response()->json($producto, 200);

    }


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

    public function search($txt) {

        $productos = Producto::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($productos, 200);

    }

    public function clienteProductos($id) {

        $productos = Producto::where('cliente_id', $id)->get();

        return Response()->json($productos, 200);

    }

}
