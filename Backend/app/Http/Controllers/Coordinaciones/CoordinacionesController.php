<?php

namespace App\Http\Controllers\Coordinaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coordinaciones\Coordinacion;
use Illuminate\Support\Facades\Storage;
class CoordinacionesController extends Controller
{

    public function index() {
        $coordinaciones = Coordinacion::orderBy('id','dsc')->paginate(7);

        return Response()->json($coordinaciones, 200);
    }

    public function read($id) {

       $coordinacion = Coordinacion::findOrFail($id);
       return Response()->json($coordinacion, 200);
    }

    public function store(Request $request)
    {

        $request->validate([
            'tema'              => 'required',
            'descripcion'       => 'required',
            'institucion'       => 'required',
            'tipo'              => 'required',
            'fecha'             => 'required'
           
        ]);

        if($request->id)
            $coordinacion = Coordinacion::findOrFail($request->id);
        else
            $coordinacion = new Coordinacion;

        $coordinacion->fill($request->all());
        if ($request->hasFile('file')) {
                if ($request->id && $coordinacion->img) {
                    Storage::delete($coordinacion->img);
                }
               $nombre = $request->file->store('coordinaciones');
               $coordinacion->img = $nombre;
            }
        $coordinacion->save();        

        return Response()->json($coordinacion, 200);

    }
    public function delete($id)
        {
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->delete();

        return Response()->json($coordinacion, 201);

    }

}
