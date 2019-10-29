<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Consultor;
use App\Models\Consultores\Consultor as Con;
use App\Models\Ats\At;
use Illuminate\Support\Facades\Storage;

class ConsultoresController extends Controller
{

    public function read($id) {

        $consultores = Consultor::where('at_id', $id)->get();
        return Response()->json($consultores, 200);

    }

    public function store(Request $request)
    {
        $request->validate([
            
            'file'           => 'required|file|max:5000|mimes:pdf,docx,doc',
            'at_id'          => 'required',
            
        ]);

        if($request->id)
            $consultor = Consultor::findOrFail($request->id);
        else
            $consultor = new Consultor;
        
        $consultor->fill($request->all());
        $consultor->fecha_oferta = date('Y-m-d H:m:s');
                
        $nombre = $request->file->store('ofertas');
        $consultor->doc_oferta = $nombre;

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

}
