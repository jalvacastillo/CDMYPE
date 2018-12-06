<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cliente\ClienteRequest;
use Illuminate\Http\Request;
use App\Models\Cliente\Cliente;

class ClienteController extends Controller
{
    

    public function index() {
       
        $clientes = Cliente::orderBy('id','dsc')->paginate(7);

        return Response()->json($clientes, 200);

    }


    public function read($id) {

        $cliente = Cliente::where('id', $id)->with('empresa', 'empresario', 'productos')->first();
        return Response()->json($cliente, 200);

    }


    public function store(ClienteRequest $request)
    {
        if($request->id){
            $cliente = Cliente::findOrFail($request->id);
        }
        else{
            $cliente = new Cliente;
        }
        
        $cliente->fill($request->all());
        $cliente->save();

        return Response()->json($cliente, 200);

    }

    public function delete($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return Response()->json($cliente, 201);

    }

    public function search($txt) {

        $clientes = Cliente::
                    whereHas('empresa', function($query) use ($txt){
                        $query->where('nombre', 'like' ,'%' . $txt . '%');

                    })->
                    orwhereHas('empresario', function($query) use ($txt){
                        $query->where('nombre', 'like' ,'%' . $txt . '%');

                    })
                    ->paginate(7);

        return Response()->json($clientes, 200);


    }

    public function searchreg($txt) {

        $clientes = Cliente::where('registro', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($clientes, 200);

    }

    public function historial($id) {

        $cliente = Cliente::where('id', $id)->with(array('historial' => function($query) {
                                                $query->orderBy('id', 'DESC');
                                            }))->first();
        return Response()->json($cliente, 200);

    }


    public function logo(Request $request){

        $cliente = Cliente::findOrFail($request->id);

        if ($request->hasFile('file')) {
                
                if ($cliente) {
                    $file = $request->file;
                    $ruta = public_path() . '/img/clientes/';
                    $nombre = time().$file->getClientOriginalName();
                    $file->move($ruta, $nombre);
                    if ($cliente->logo != 'default.png') {
                        \File::delete($ruta . $cliente->logo);
                    }
                    
                    $cliente->logo = $nombre;
                    $cliente->save();
                }
            } 
        return Response()->json($cliente, 200);
        
    }


}
