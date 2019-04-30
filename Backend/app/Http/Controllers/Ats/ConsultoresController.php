<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Consultor;
use App\Models\Consultores\Consultor as Con;
use App\Models\Ats\At;

class ConsultoresController extends Controller
{

    public function read($id) {

        $consultores = Consultor::where('at_id', $id)->with('consultor')->get();
        return Response()->json($consultores, 200);

    }


    public function store(Request $request)
    {
        $request->validate([
            // 'file'   => 'required',
            // 'seleccionado'   => 'required',
            'consultor_id'   => 'required',
            'doc_oferta'   => 'required',
            // 'fecha_oferta'   => 'required',
            'at_id'        => 'required',
        ]);

        if($request->id)
            $consultor = Consultor::findOrFail($request->id);
        else
            $consultor = new Consultor;
        
        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/ofertas';
            if ($consultor->doc_oferta) { \File::delete($ruta . $consultor->doc_oferta); }
            $file->move($ruta, $request->doc_oferta);
        } 

        $consultor->fill($request->all());
        $consultor->save();

        return Response()->json($consultor, 200);

    }

    public function delete($id)
    {
        $consultor = Consultor::findOrFail($id);
        if ($consultor->doc_oferta) { \File::delete(public_path() . '/ofertas/' . $consultor->doc_oferta); }
        $consultor->delete();

        return Response()->json($consultor, 201);

    }

    public function search($txt) {

        $consultorrios = Consultor::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($consultorrios, 200);

    }

    // Subir consultor

    public function oferta($atcode, $consultorcode)
    {
        $oferta = Consultor::where('at_id', decrypt($atcode))->where('consultor_id', decrypt($consultorcode))->first();

        $at =  At::find(decrypt($atcode));
        $at->code = $atcode;
        $consultor =  Con::find(decrypt($consultorcode));
        $consultor->code = $consultorcode;

        return view('oferta-at', compact('at','consultor', 'oferta'));

    }

    public function guardarOferta(Request $request)
    {

        // return $request;
        $request->validate([
            'file'      => 'required',
            'at_id'        => 'required',
            'consultor_id' => 'required',
        ]);

        $request['at_id'] = decrypt($request['at_id']);
        $request['consultor_id'] = decrypt($request['consultor_id']);
        $request['fecha_oferta'] = date('Y-m-d H:m:s');

        $consultor = new Consultor;
        
        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/ofertas';
            if ($request->id) { \File::delete($ruta . $consultor->doc_oferta); }
            $request['doc_oferta'] = date('Y-m-d s') . '-' . $request->file('file')->getClientOriginalName(). '.' . $request->file('file')->getClientOriginalExtension();
            $file->move($ruta, $request->doc_oferta);
        } 

        $consultor->fill($request->all());
        $consultor->save();

        return back();

    }

}
