<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Ampliacion;

class AmpliacionesController extends Controller
{
    
    public function read($id) {

        $ampliacion = Ampliacion::where('at_id', $id)->first();
        return Response()->json($ampliacion, 200);

    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha'        => 'required',
            'tiempo_ampliacion'    => 'required',
            'periodo'        => 'required',
            'razonamiento'        => 'required',
            'at_id'        => 'required',
            'solicitante'        => 'required',
        ]);

        if($request->id){
            $ampliacion = Ampliacion::findOrFail($request->id);
        }
        else{
            $ampliacion = new Ampliacion;
        }
        
        $ampliacion->fill($request->all());
        $ampliacion->save();

        return Response()->json($ampliacion, 200);

    }

    public function delete($id)
    {
        $ampliacion = Ampliacion::findOrFail($id);
        $ampliacion->delete();

        return Response()->json($ampliacion, 201);

    }

    public function ampliacionPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $ampliacion = Ampliacion::where('id', decrypt($id))->with('at')->firstOrFail();
        $at = $ampliacion->at;
        $ampliacion->razonamientos = explode("\r\n", $ampliacion->razonamiento);
        if($ampliacion->solicitante == "Consultor")
            $solicitante = \App\Models\Consultores\Consultor::find($at->consultor->consultor_id);
        else
            $solicitante =  \App\Models\Empresas\Empresario::find($at->empresario_id);
        
        $pdf = \PDF::loadView('pdf.ats.ampliacion',  compact('ampliacion', 'at', 'solicitante'));
        return $pdf->stream();

    }


}
