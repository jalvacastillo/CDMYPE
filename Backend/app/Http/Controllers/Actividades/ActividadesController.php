<?php

namespace App\Http\Controllers\Actividades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actividades\Actividad;
use Illuminate\Support\Facades\Storage;

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

        $actividad = Actividad::where('id', $id)->with('asesores')->with('especialidad')
                                ->with(array('aplicaciones' => function($query) {
                                    $query->orderBy('estado', 'desc');
                                }))
                                ->firstOrFail();
        return Response()->json($actividad, 200);
            
    }

    public function store(Request $request)
    {

        $request->validate([
            //'img'           =>'required',
            //'file'          => 'mimes:jpeg,png,jpg|max:40000',
            'nombre'        =>'required',
            'descripcion'   =>'required',
            'tipo'          =>'required',
            'categoria'     =>'required',
            'estado'        =>'required',
            'cupo'          =>'required',
            'fecha_inicio'  =>'required',
            'fecha_fin'     =>'required',
        ]);

        if($request->id){
            $actividad = Actividad::findOrFail($request->id);
        }
        else{
            $actividad = new Actividad;
            $actividad->img = 'actividades/default.jpg';
        }
        
        $actividad->fill($request->all());

            if ($request->hasFile('file')) {
                if ($request->id && $actividad->img && ($actividad->img != 'actividades/default.jpg') ) {
                    Storage::delete($actividad->img);
                }
               $nombre = $request->file->store('actividades');
               $actividad->img = $nombre;
            }
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
