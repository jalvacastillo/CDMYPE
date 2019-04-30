<?php

namespace App\Http\Controllers\Caps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caps\Cap;
use App\Mail\CapTdrConsultores;
use Illuminate\Support\Facades\Mail;

class CapsController extends Controller
{
    

    public function index() {
       
        $caps = Cap::orderBy('id','dsc')->with('asesor', 'consultor')->paginate(7);

        return Response()->json($caps, 200);

    }


    public function read($id) {

        $cap = Cap::where('id', $id)->with('consultor','asesor')->firstOrFail();
        return Response()->json($cap, 200);

    }


    public function store(Request $request)
    {
        $request->validate([
            'tema'        => 'required',
            'encabezado'        => 'required',
            'categoria'        => 'required',
            'asesor_id'        => 'required',
        ]);

        if($request->id)
            $cap = Cap::findOrFail($request->id);
        else
            $cap = new Cap;
        
        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/informes';
            if ($cap->informe) { \File::delete($ruta . $cap->informe); }
            $file->move($ruta, $request->informe);
        }

        $cap->fill($request->all());
        $cap->save();

        return Response()->json($cap, 200);

    }

    public function delete($id)
    {
        $cap = Cap::findOrFail($id);
        $cap->delete();

        return Response()->json($cap, 201);

    }

    public function search($txt) {

        $caps = Cap::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($caps, 200);

    }

    public function send(request $request) {

        $request->validate([
            'tdr'          => 'required',
            'consultores'  => 'required',
        ]);

        for ($i=0; $i < count($request['consultores']); $i++) { 
            if ($request['consultores'][$i]['enviar'] == true) {
                Mail::to($request['consultores'][$i]['correo'])->send(new CapTdrConsultores($request['tdr'], $request['consultores'][$i]));
            }
        }

        return Response()->json($request, 200);

    }

    public function tdrPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $cap = Cap::where('id', decrypt($id))->with('consultor','asesor')->firstOrFail();
        $cap->especificos = explode("\r\n", $cap->obj_especifico);
        $cap->productos = explode("\r\n", $cap->productos);

        $reportes = \PDF::loadView('pdf.caps.tdr', compact('cap'));
        return $reportes->stream();

    }

}
