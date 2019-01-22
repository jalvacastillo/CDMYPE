<?php

namespace App\Http\Controllers\Diagnosticos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnosticos\DiagnosticoRequest;
use App\Models\Diagnosticos\Diagnostico;

class DiagnosticosController extends Controller
{
    public function index() {
       
        $diagnosticos = Diagnostico::orderBy('id','dsc')->paginate(7);

        return Response()->json($diagnosticos, 200);
            
    }

    public function read($id) {

        $diagnostico = Diagnostico::where('id',$id)->with('preguntas.valores')
                                // ->with(array('aplicaciones' => function($query) {
                                //     $query->orderBy('estado', 'desc');
                                // }))
                                ->firstOrFail();
        return Response()->json($diagnostico, 200);
            
    }

    public function store(DiagnosticoRequest $request)
    {

        if($request->id){
            $diagnostico = Diagnostico::findOrFail($request->id);
        }
        else{
            $diagnostico = new Diagnostico;
        }

        
        $diagnostico->fill($request->all());
        $diagnostico->slug  = str_slug($request->nombre, '-');
        $diagnostico->save();

        return Response()->json($diagnostico, 200);

    }

    public function delete($id)
    {
        $diagnostico = Diagnostico::findOrFail($id);
        $diagnostico->delete();

        return Response()->json($diagnostico, 201);

    }
}
