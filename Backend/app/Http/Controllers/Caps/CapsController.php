<?php

namespace App\Http\Controllers\Caps;

use App\Http\Controllers\Controller;
use App\Http\Requests\Caps\CapRequest;
use App\Models\Caps\Cap;

class CapsController extends Controller
{
    

    public function index() {
       
        $caps = Cap::orderBy('id','dsc')->with('asesor')->paginate(7);

        return Response()->json($caps, 200);

    }


    public function read($id) {

        $at = Cap::where('id', $id)->with('asesor', 'empresas', 'consultores', 'contrato', 'acta')->firstOrFail();
        return Response()->json($at, 200);

    }


    public function store(CapRequest $request)
    {
        if($request->id){
            $at = Cap::findOrFail($request->id);
        }
        else{
            $at = new Cap;
        }
        
        $at->fill($request->all());
        $at->save();

        return Response()->json($at, 200);

    }

    public function delete($id)
    {
        $at = Cap::findOrFail($id);
        $at->delete();

        return Response()->json($at, 201);

    }

    public function search($txt) {

        $caps = Cap::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($caps, 200);

    }

}
