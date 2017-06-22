<?php

namespace App\Http\Controllers\Salidas;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Salidas\Asesor;

class AsesorController extends Controller
{
    

    public function index($salida) {
       
        try {

            $asesores = Asesor::where('salida_id', $salida)->orderBy('id','dsc')->paginate(7);

            return Response()->json($asesores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $asesor = Asesor::find($id);
            return Response()->json($asesor, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(Request $request)
    {
        try {

            foreach ($request->asesores as $asesor) {
                if ($asesor['estado']) {
                    $salida_asesor = Asesor::where('salida_id', $request->id)->where('asesor_id', $asesor['id'])->first();
                    if (!$salida_asesor) {
                        $salida_asesor = new Asesor;
                        $salida_asesor->salida_id = $request->id;
                        $salida_asesor->asesor_id = $asesor['id'];
                        $salida_asesor->save();
                    }
                }else{
                    $salida_asesor = Asesor::where('salida_id', $request->id)->where('asesor_id', $asesor['id'])->first();
                    if ($salida_asesor) {
                        $salida_asesor->delete();
                    }
                }
            }

            return Response()->json($request, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $asesor = Asesor::find($id);
            $asesor->delete();

            return Response()->json($asesor, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
