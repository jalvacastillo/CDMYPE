<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Servicios\AsesorRequest;
use App\Models\Servicios\Asesor;

class AsesoresController extends Controller
{
    
    public function store(AsesorRequest $request)
    {
        if($request->id){
            $asesor = Asesor::findOrFail($request->id);
        }
        else{
            $asesor = new Asesor;
        }
        
        $asesor->fill($request->all());
        $asesor->save();

        return Response()->json($asesor, 200);

    }

    public function delete($id)
    {
        $asesor = Asesor::findOrFail($id);
        $asesor->delete();

        return Response()->json($asesor, 201);

    }


}
