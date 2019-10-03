<?php

namespace App\Http\Controllers\Asesores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Proyecto;

class EmpresasController extends Controller
{

    public function empresas($id) {
       
    $empresas = Proyecto::orderBy('id','dsc')->with('empresa','acciones')->where('asesor_id', $id)->get();

        return Response()->json($empresas, 200);
            
    }


}