<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Proyecto;

class ProyectosController extends Controller
{
    

    public function store(Request $request)
    {
        $request->validate([
            'empresa_id'        => 'required',
            'asesor_id'         => 'required',
            'inicio'        => 'required',
            'fin'        => 'required',
            'nombre'        => 'required',
            'descripcion'        => 'required',
        ]);

        if($request->id){
            $proyecto = Proyecto::findOrFail($request->id);
        }
        else{
            $proyecto = new Proyecto;
        }
        
        $proyecto->fill($request->all());
        $proyecto->save();

        return Response()->json($proyecto, 200);

    }

    public function delete($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return Response()->json($proyecto, 201);

    }


}
