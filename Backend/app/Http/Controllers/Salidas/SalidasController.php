<?php

namespace App\Http\Controllers\Salidas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salidas\Salida;
use App\Models\Salidas\Asesor;

class SalidasController extends Controller
{
    public function index() {
       
        $salidas = Salida::orderBy('id','dsc')->with('asesores.asesor', 'encargado')->paginate(7);

        return Response()->json($salidas, 200);
            
    }

    public function search($txt) {

        $salidas = Salida::where('nombre', 'like' ,'%' . $txt . '%')->with('asesores', 'encargado')->paginate(7);

        return Response()->json($salidas, 200);

    }

    public function read($id) {

        $salida = Salida::where('id', $id)->with('asesores', 'encargado')->firstOrFail();

        return Response()->json($salida, 200);
            
    }

    public function store(Request $request)
    {

        $request->validate([
            'fecha'        => 'required',
            'asesores'        => 'required',
            'encargado_id'        => 'required',
        ]);

        if($request->id){
            $salida = Salida::findOrFail($request->id);
            foreach ($salida->asesores as $asesor) {
                $asesor->delete();
            }
        }
        else{
            $salida = new Salida;
        }

        $salida->fill($request->all());
        $salida->save();

        foreach ($request->asesores as $asesor) {
            if ($asesor['agregar']) {
                $table = new Asesor;
                $table->salida_id = $salida->id;
                $table->asesor_id = $asesor['id'];
                $table->save();
            }
        }

        

        return Response()->json($salida, 200);

    }

    public function delete($id)
    {
        $salida = Salida::findOrFail($id);
        $salida->delete();

        return Response()->json($salida, 201);

    }

    public function pdf($firma, $ano, $mes)
    {

        $salidas = Salida::whereYear('fecha', $ano)->whereMonth('fecha', $mes)
                            ->orderBy('fecha', 'ASC')
                            ->get();

      $pdf = \PDF::loadView('pdf.salidas.salidas',  compact('salidas', 'ano','mes','firma'))->setPaper('letter','landscape');
      return $pdf->stream();

    }

}
