<?php

namespace App\Http\Controllers\Caps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caps\Consultor;
use App\Models\Consultores\Consultor as Con;
use App\Models\Caps\Cap;

class ConsultoresController extends Controller
{

    public function read($id) {

        $consultores = Consultor::where('cap_id', $id)->with('consultor')->get();
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
            'cap_id'        => 'required',
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

    public function oferta($capcode, $consultorcode)
    {
        $oferta = Consultor::where('cap_id', decrypt($capcode))->where('consultor_id', decrypt($consultorcode))->first();

        $cap =  Cap::find(decrypt($capcode));
        $cap->code = $capcode;
        $consultor =  Con::find(decrypt($consultorcode));
        $consultor->code = $consultorcode;

        return view('oferta-cap', compact('cap','consultor', 'oferta'));

    }

    public function guardarOferta(Request $request)
    {

        // return $request;
        $request->validate([
            'file'      => 'required',
            'cap_id'        => 'required',
            'consultor_id' => 'required',
        ]);

        $request['cap_id'] = decrypt($request['cap_id']);
        $request['consultor_id'] = decrypt($request['consultor_id']);
        $request['fecha_oferta'] = date('Y-m-d H:m:s');;

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
