<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\At;
use App\Mail\AtTdrConsultores;
use Illuminate\Support\Facades\Mail;

class AtsController extends Controller
{
    

    public function index() {
       
        $ats = At::orderBy('id','dsc')->with('asesor', 'empresas', 'consultor')->paginate(7);

        return Response()->json($ats, 200);

    }


    public function read($id) {

        $at = At::where('id', $id)->with('empresario','asesor')->firstOrFail();
        return Response()->json($at, 200);

    }


    public function store(Request $request)
    {
        $request->validate([
            'empresario_id'        => 'required',
            'asesor_id'        => 'required',
        ]);

        if($request->id)
            $at = At::findOrFail($request->id);
        else
            $at = new At;
        
        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/informes';
            if ($at->informe) { \File::delete($ruta . $at->informe); }
            $file->move($ruta, $request->informe);
        }

        $at->fill($request->all());
        $at->save();

        return Response()->json($at, 200);

    }

    public function delete($id)
    {
        $at = At::findOrFail($id);
        $at->delete();

        return Response()->json($at, 201);

    }

    public function search($txt) {

        $ats = At::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($ats, 200);

    }

    public function send(request $request) {

        $request->validate([
            'tdr'          => 'required',
            'consultores'  => 'required',
        ]);

        for ($i=0; $i < count($request['consultores']); $i++) { 
            if ($request['consultores'][$i]['enviar'] == true) {
                Mail::to($request['consultores'][$i]['correo'])->send(new AtTdrConsultores($request['tdr'], $request['consultores'][$i]));
            }
        }

        return Response()->json($request, 200);

    }

    public function tdrPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $at = At::where('id', decrypt($id))->with('empresario', 'empresas','asesor')->firstOrFail();
        $at->especificos = explode("\r\n", $at->obj_especifico);
        $at->productos = explode("\r\n", $at->productos);

        $reportes = \PDF::loadView('pdf.ats.tdr', compact('at'));
        return $reportes->stream();

    }

}
