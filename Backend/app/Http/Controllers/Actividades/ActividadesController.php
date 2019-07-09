<?php

namespace App\Http\Controllers\Actividades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividades\Actividad;

class ActividadesController extends Controller
{
    public function index() {
       
        $actividades = Actividad::orderBy('id','dsc')->with('asesores')->paginate(7);

        return Response()->json($actividades, 200);
            
    }

    public function search($txt) {

        $actividades = Actividad::where('nombre', 'like' ,'%' . $txt . '%')->with('asesores')->paginate(7);

        return Response()->json($actividades, 200);

    }

    public function read($id) {

        $actividad = Actividad::where('id', $id)->with('asesores')
                                ->with(array('aplicaciones' => function($query) {
                                    $query->orderBy('estado', 'desc');
                                }))
                                ->firstOrFail();
        return Response()->json($actividad, 200);
            
    }

    public function store(Request $request)
    {

        $request->validate([
            'img'        => 'required',
            'nombre'        => 'required',
        ]);

        if($request->id)
            $actividad = Actividad::findOrFail($request->id);
        else
            $actividad = new Actividad;


        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/img/actividades';
            if ($actividad->img) { \File::delete($ruta . $actividad->img); }
            $file->move($ruta, $request->img);
        }

        
        $actividad->fill($request->all());
        $actividad->save();

        return Response()->json($actividad, 200);

    }

    public function delete($id)
    {
        $actividad = Actividad::findOrFail($id);
        $actividad->delete();

        return Response()->json($actividad, 201);

    }
}
