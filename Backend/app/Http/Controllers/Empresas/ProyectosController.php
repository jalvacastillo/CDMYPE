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
            'inicio'            => 'required',
            'fin'               => 'required',
            'nombre'            => 'required',
            'descripcion'       => 'required',
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

    public function search($txt, $id) {

        $proyectos = Proyecto::with('asesores')->where('nombre', 'like' ,'%' . $txt . '%')
        ->wherehas(function ($query) use ($id){$query->where('asesores.asesor_id', $id);})->get();
		return Response()->json($proyectos, 200);
    
        //$empresas = Proyecto::orderBy('id','dsc')->with('empresa')->where('asesor_id', $id)->get()
	}


}
