<?php

namespace App\Http\Controllers\Ats;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ats\AtRequest;
use App\Models\Ats\At;

class AtsController extends Controller
{
    

    public function index() {
       
        $ats = At::orderBy('id','dsc')->with('asesor', 'empresas')->paginate(7);

        return Response()->json($ats, 200);

    }


    public function read($id) {

        $at = At::where('id', $id)->with('asesor', 'empresas', 'consultores', 'contrato', 'acta')->firstOrFail();
        return Response()->json($at, 200);

    }


    public function store(AtRequest $request)
    {
        if($request->id){
            $at = At::findOrFail($request->id);
        }
        else{
            $at = new At;
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

}
