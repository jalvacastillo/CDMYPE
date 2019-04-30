<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ats\Empresa;

class EmpresasController extends Controller
{

    public function read($id) {

        $empresas = Empresa::where('at_id', $id)->get();
        return Response()->json($empresas, 200);

    }


    public function store(Request $request)
    {
        $request->validate([
            'empresa_id'   => 'required',
            'at_id'        => 'required',
        ]);

        if($request->id)
            $empresa = Empresa::findOrFail($request->id);
        else
            $empresa = new Empresa;
        
        $empresa->fill($request->all());
        $empresa->save();

        return Response()->json($empresa, 200);

    }

    public function delete($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return Response()->json($empresa, 201);

    }

    public function search($txt) {

        $empresarios = Empresa::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($empresarios, 200);

    }

}
