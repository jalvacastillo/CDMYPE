<?php

namespace App\Http\Controllers\At;

use App\Http\Controllers\Controller;

use App\Http\Requests\AtActaRequest;
use App\Models\At\Acta;

class ActaController extends Controller
{
    

    public function index() {
       
        try {

            $actas = Acta::orderBy('id','dsc')->paginate(7);

            return Response()->json($actas, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $acta = Acta::where('termino_id', $id)->first();
            return Response()->json($acta, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }


    public function store(AtActaRequest $request)
    {
        try {

            if($request->id){
                $acta = Acta::find($request->id);
            }
            else{
                $acta = new Acta;
            }
            
            $acta->fill($request->all());
            $acta->save();

            return Response()->json($acta, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $acta = Acta::find($id);
            $acta->delete();

            return Response()->json($acta, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
