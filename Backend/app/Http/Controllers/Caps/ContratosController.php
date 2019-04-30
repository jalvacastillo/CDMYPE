<?php

namespace App\Http\Controllers\Caps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caps\Contrato;

class ContratosController extends Controller
{
    
    public function read($id) {

        $contrato = Contrato::where('cap_id', $id)->first();
        return Response()->json($contrato, 200);

    }

    public function store(Request $request)
    {
        $request->validate([
            'cap_id'        => 'required',
            'lugar'         => 'required',
            'pago'        => 'required',
            'firma'           => 'required',
        ]);

        if($request->id){
            $contrato = Contrato::findOrFail($request->id);
        }
        else{
            $contrato = new Contrato;
        }
        
        $contrato->fill($request->all());
        $contrato->save();

        return Response()->json($contrato, 200);

    }

    public function delete($id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();

        return Response()->json($contrato, 201);

    }

    public function contratoPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $contrato = Contrato::where('id', decrypt($id))->with('cap.consultor', 'cap.ofertantes', 'cap.asesor')->firstOrFail();
        $cap = $contrato->cap;
        $consultor = \App\Models\Consultores\Consultor::find($contrato->cap->consultor->consultor_id);
        $ofertantes = $cap->ofertantes;
        $cap->productos = explode("\r\n", $cap->productos);
        if($consultor->empresa)
            $consultor->denominacion = 'la empresa consultora';
        else
            $consultor->denominacion = ($consultor->sexo == 'Mujer'? 'la consultora': 'el consultor');

        $pdf = \PDF::loadView('pdf.caps.contrato',  compact('cap', 'consultor', 'contrato','ofertantes'));
        return $pdf->stream();

    }


}
