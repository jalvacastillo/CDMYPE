<?php

namespace App\Http\Controllers\Cap;

use App\Http\Controllers\Controller;

use App\Http\Requests\CapTerminoRequest;
use App\Models\Cap\Termino;

class TerminoController extends Controller
{
    

    public function index() {
       
        try {

            $terminos = Termino::orderBy('id','dsc')->paginate(7);

            return Response()->json($terminos, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function historial($id) {
       
        try {

            $termino = Termino::where('id', $id)->orderBy('id','dsc')->with('ats')->first();

            return Response()->json($termino, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $termino = Termino::find($id);
            return Response()->json($termino, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    // public function search($txt) {
    //     try {

    //         $termino = Termino::where('nombre', 'like' ,'%' . $txt . '%')->get();
    //         return Response()->json($termino, 200);
            
    //     } catch (Exception $e) {
    //         return Response()->json($e, 500);
    //     }
    // }


    public function store(CapTerminoRequest $request)
    {
        try {

            if($request->id){
                $termino = Termino::find($request->id);
            }
            else{
                $termino = new Termino;
            }
            
            $termino->fill($request->all());
            $termino->save();

            return Response()->json($termino, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $termino = Termino::find($id);
            $termino->delete();

            return Response()->json($termino, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
