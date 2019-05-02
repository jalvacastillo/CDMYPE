<?php

namespace App\Http\Controllers\Materiales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materiales\Material;

class MaterialesController extends Controller
{
    public function index() {
       
        $materiales = Material::orderBy('id','dsc')->with('recursos', 'asesor')->paginate(7);

        return Response()->json($materiales, 200);
            
    }

    public function search($txt) {

        $materiales = Material::where('nombre', 'like' ,'%' . $txt . '%')->with('recursos', 'asesor')->paginate(7);

        return Response()->json($materiales, 200);

    }

    public function read($id) {

        $material = Material::where('id', $id)->with('recursos', 'asesor')->firstOrFail();

        return Response()->json($material, 200);
            
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre'        => 'required',
            'descripcion'        => 'required',
            'asesor_id'        => 'required',
            'especialidad_id'        => 'required',
        ]);

        if($request->id)
            $material = Material::findOrFail($request->id);
        else
            $material = new Material;

        $material->fill($request->all());
        $material->save();        

        return Response()->json($material, 200);

    }

    public function delete($id)
    {
        $material = Material::findOrFail($id);
        $material->delete();

        return Response()->json($material, 201);

    }


}
