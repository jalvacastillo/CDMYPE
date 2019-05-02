<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pagina\Meta;

class MetasController extends Controller
{
    

    public function index() {
       
        $metas = Meta::where('ano', date('Y'))->orderBy('id','dsc')->with('asesor')->get();

        return Response()->json($metas, 200);

    }


    public function read($id) {
        
        $meta = Meta::where('id', $id)->first();

        return Response()->json($meta, 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'asesor_id'  => 'required',
            'mes'        => 'required',
            'ano'        => 'required',
            'meta'        => 'required',
        ]);

        if($request->id)
            $meta = Meta::findOrFail($request->id);
        else
            $meta = new Meta;

        $meta->fill($request->all());
        $meta->save();

        return Response()->json($meta, 200);


    }

    public function delete($id)
    {
       
        $meta = Meta::findOrFail($id);
        $meta->delete();

        return Response()->json($meta, 201);

    }

}
