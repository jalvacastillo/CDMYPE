<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Contrato;

class ContratosController extends Controller
{
    
    public function read($id) {

        $contrato = Contrato::where('at_id', $id)->first();
        return Response()->json($contrato, 200);

    }

    public function store(Request $request)
    {
        $request->validate([
            'at_id'        => 'required',
            'lugar_firma'    => 'required',
            'inicio'        => 'required',
            'fin'        => 'required',
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

        $contrato = Contrato::where('id', decrypt($id))->with('at.consultor', 'at.ofertantes', 'at.empresario')->firstOrFail();
        $at = $contrato->at;
        $consultor = \App\Models\Consultores\Consultor::find($contrato->at->consultor->consultor_id);
        $empresario = \App\Models\Empresas\Empresario::find($contrato->at->empresario_id);
        $empresa = $empresario->empresas()->first()->empresa;
        $ofertantes = $at->ofertantes;
        $at->productos = explode("\r\n", $at->productos);
        if($consultor->empresa)
            $consultor->denominacion = 'la empresa consultora';
        else
            $consultor->denominacion = ($consultor->sexo == 'Mujer'? 'la consultora': 'el consultor');

        $pdf = \PDF::loadView('pdf.ats.contrato',  compact('at', 'consultor', 'empresa', 'empresario', 'contrato','ofertantes'));
        return $pdf->stream();

    }


}
