<?php

namespace App\Http\Controllers\Materiales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materiales\Recurso;

class RecursosController extends Controller
{
    

    public function store(Request $request)
    {
        $request->validate([
            'material_id'        => 'required',
            'file'    => 'required',
            'nombre'        => 'required',
        ]);

        if($request->id)
            $recurso = Recurso::findOrFail($request->id);
        else
            $recurso = new Recurso;
        
        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/materiales';
            if ($recurso->archivo) { \File::delete($ruta . $recurso->archivo); }
            $file->move($ruta, $request->archivo);
        } 

        
        $recurso->fill($request->all());
        $recurso->save();

        return Response()->json($recurso, 200);

    }

    public function delete($id)
    {
        $recurso = Recurso::findOrFail($id);
        $recurso->delete();

        return Response()->json($recurso, 201);

    }


}
