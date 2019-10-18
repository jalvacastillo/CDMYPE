<?php

namespace App\Http\Controllers\Vinculaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vinculaciones\Vinculacion;
use Illuminate\Support\Facades\Storage;

class VinculacionesController extends Controller
{

    public function index() {
       
       $vinculaciones = Vinculacion::orderBy('id','dsc')->with('empresa')->with('equipo')->paginate(7);

        return Response()->json($vinculaciones, 200);
    }

    public function read($id) {

       
    }

    public function store(Request $request)
    {

        $request->validate([
            'tema'           => 'required',
            'descripcion'    => 'required',
            'empresa_id'     => 'required',
            'institucion'    => 'required',
            'tipo'           => 'required',
            'fecha'          => 'required',
            'monto'          => 'required'
        ]);

        if($request->id)
            $vinculacion = Vinculacion::findOrFail($request->id);
        else
            $vinculacion = new Vinculacion;

        $vinculacion->fill($request->all());
        if ($request->hasFile('file')) {
                if ($request->id && $vinculacion->img) {
                    Storage::delete($vinculacion->img);
                }
               $nombre = $request->file->store('vinculaciones');
               $vinculacion->img = $nombre;
            }
        $vinculacion->save();        

        return Response()->json($vinculacion, 200);

    }
        public function delete($id)
        {
        $vinculacion = Vinculacion::findOrFail($id);
        $vinculacion->delete();

        return Response()->json($vinculacion, 201);

    }
}
