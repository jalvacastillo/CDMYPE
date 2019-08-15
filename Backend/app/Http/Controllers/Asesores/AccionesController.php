<?php

namespace App\Http\Controllers\Asesores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Accion;

class AccionesController extends Controller
{

    public function acciones($id){
       
        $acciones = Accion::orderBy('id','dsc')->with('proyecto')->with('asesoria')->where('completado', 0)
                            ->wherehas('proyecto', function($q) use ($id){
                                $q->where('asesor_id', $id);
                            })->get();

        return Response()->json($acciones, 200);
            
    }
    public function accion($id){
       
        $acciones = Accion::with('proyecto')->where('proyecto_id', $id)->get();

        return Response()->json($acciones, 200);
            
    }

}