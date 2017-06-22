<?php

namespace App\Http\Controllers\Consultores;

use App\Http\Controllers\Controller;

use App\Http\Requests\ConsultorEspecialidadRequest;
use App\Models\Consultor\Especialidad;

class ConsultorEspecialidadController extends Controller
{
    

    public function index($id) {
       
        try {

            $especialidades = Especialidad::where('consultor_id', $id)->get();

            return Response()->json($especialidades, 200);
            
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

    public function store(ConsultorEspecialidadRequest $request)
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