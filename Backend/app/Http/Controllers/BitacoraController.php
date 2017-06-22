<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;

use App\Models\Bitacora;

class BitacoraController extends Controller
{
    public function index() {
       
        try {

            $bitacoras = Bitacora::orderBy('id','dsc')->get();

            return Response()->json($bitacoras, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $bitacora = Bitacora::find($id);
            return Response()->json($bitacora, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(NoticiaRequest $request)
    {
        try {

            if($request->id){
                $bitacora = Bitacora::find($request->id);
            }
            else{
                $bitacora = new Bitacora;
            }

            $bitacora->fill($request->all());
            $bitacora->slug  = str_slug($request->titulo, '-');
            $bitacora->save();

            return Response()->json($bitacora, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $bitacora = Bitacora::find($id);
            $bitacora->delete();

            return Response()->json($bitacora, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }
}
