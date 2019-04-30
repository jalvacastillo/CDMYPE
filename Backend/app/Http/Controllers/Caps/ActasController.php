<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Acta;

class ActasController extends Controller
{
    
    public function read($id) {

        $acta = Acta::where('at_id', $id)->first();
        return Response()->json($acta, 200);

    }

    public function store(Request $request)
    {
        $request->validate([
            'at_id'        => 'required',
            'tipo'    => 'required',
            'fecha'        => 'required',
        ]);

        if($request->id){
            $acta = Acta::findOrFail($request->id);
        }
        else{
            $acta = new Acta;
        }
        
        $acta->fill($request->all());
        $acta->save();

        return Response()->json($acta, 200);

    }

    public function delete($id)
    {
        $acta = Acta::findOrFail($id);
        $acta->delete();

        return Response()->json($acta, 201);

    }

    public function actaPdf($id)
    {
        if (is_numeric($id))
            $id = encrypt($id);

        $acta = Acta::where('id', decrypt($id))->with('at')->firstOrFail();

        $at = $acta->at;
        $empresario = $at->empresario;
        $empresa = $empresario->empresas()->first()->empresa;
        $consultor = \App\Models\Consultores\Consultor::find($at->consultor->consultor_id);
        $contrato = $at->contrato;
        $acta = $at->acta;
        $pdf = \PDF::loadView('pdf.ats.acta',  compact('at', 'consultor', 'empresa', 'empresario', 'contrato', 'acta'));
        return $pdf->stream();

    }

    public function aportePDF($id)
    {
        if (is_numeric($id))
            $id = encrypt($id);

        $at = \App\Models\Ats\At::where('id', decrypt($id))->with('contrato', 'consultor', 'empresario')->firstOrFail();
        $contrato   = $at->contrato;
        $at->empresa   = $at->empresario->empresas()->first()->empresa->nombre;
        $at->pago = round($contrato->pagoEmpresario,2);
        $pdf = \PDF::loadView('pdf.ats.pago_aporte',  compact('at'));
        return $pdf->stream();
    }

    public function reciboPDF($id)
    {
        if (is_numeric($id))
            $id = encrypt($id);

        $at = \App\Models\Ats\At::where('id', decrypt($id))->with('contrato', 'consultor', 'empresario')->firstOrFail();

        $consultor = $at->consultor->consultor;
        $contrato   = $at->contrato;
        $concepto = "Pago correspondiente al aporte empresarial por desarrollo de asistencia técnica denominada:";
        $concepto = $concepto . $at->tema;
        $fecha = $at->acta->fecha;
        $descuento = 0;
        $contrato->cantidadEnLetras = \NumeroALetras::convertir(number_format($contrato->pago, 2), 'Dolares', '/100');

        // return $contrato;

        date_default_timezone_set('America/El_Salvador');
        $time = time();
        $hora = date("g:i a", $time);
        $pdf = \PDF::loadView('pdf.ats.aporte',  compact('contrato', 'descuento','consultor', 'pago', 'concepto', 'fecha', 'consultor'));
        return $pdf->stream();

    }

    public function recepcionPDF($id)
    {
        if (is_numeric($id))
            $id = encrypt($id);

        $at = \App\Models\Ats\At::where('id', decrypt($id))->with('contrato', 'consultor', 'empresario')->firstOrFail();
        $consultor = $at->consultor;
        $fecha       = $at->acta->fecha;
        $contrato   = $at->contrato;
        $empresa   = $at->empresario->empresas()->first()->empresa; 
        $servicio['tipo'] = "SERVICIOS DE ASISTENCIA TÉCNICA";
        $servicio['descripcion'] = "Asistencia técnica denominada: " . $at->tema . " para la empresa " . $empresa->nombre;
        $servicio['pago'] = $contrato->pagoCdmype;
        
        date_default_timezone_set('America/El_Salvador');
        $time = time();
        $hora = date("g:i a", $time);
        $pdf = \PDF::loadView('pdf.ats.recepcion_bienes',  compact('concepto', 'pago','fecha','servicio','consultor'));
        return $pdf->stream();

    }


}
