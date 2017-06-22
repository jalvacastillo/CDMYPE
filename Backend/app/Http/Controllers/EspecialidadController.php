<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\EspecialidadRequest;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    

    public function index() {
       
        try {

            $especialidads = Especialidad::orderBy('id','dsc')->get();

            return Response()->json($especialidads, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $especialidad = Especialidad::find($id);
            return Response()->json($especialidad, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(EspecialidadRequest $request)
    {
        try {

            if($request->id){
                $especialidad = Especialidad::find($request->id);
            }
            else{
                $especialidad = new Especialidad;
            }
            
            $especialidad->fill($request->all());
            $especialidad->save();

            return Response()->json($especialidad, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $especialidad = Especialidad::find($id);
            $especialidad->delete();

            return Response()->json($especialidad, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
