<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresas\EmpresarioRequest;
use App\Models\Empresas\Empresario;

class EmpresariosController extends Controller
{
    

    public function index() {
       
        $empresarios = Empresario::orderBy('id','dsc')->paginate(7);

        return Response()->json($empresarios, 200);

    }


    public function read($id) {

        $empresario = Empresario::findOrFail($id);
        return Response()->json($empresario, 200);

    }


    public function store(EmpresarioRequest $request)
    {
        if($request->id){
            $empresario = Empresario::findOrFail($request->id);
        }
        else{
            $empresario = new Empresario;
        }
        
        $empresario->fill($request->all());
        $empresario->save();

        return Response()->json($empresario, 200);

    }

    public function delete($id)
    {
        $empresario = Empresario::findOrFail($id);
        $empresario->delete();

        return Response()->json($empresario, 201);

    }

    public function search($txt) {

        $empresariorios = Empresario::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($empresariorios, 200);

    }

}
