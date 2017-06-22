<?php

namespace App\Http\Controllers\Consultores;

use App\Http\Controllers\Controller;

use App\Http\Requests\ConsultorRequest;
use App\Models\Consultor\Consultor;
use App\Models\Consultor\Especialidad;

class ConsultorController extends Controller
{
    

    public function index() {
       
        try {

            $consultores = Consultor::orderBy('id','dsc')->paginate(7);

            return Response()->json($consultores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function historial($id) {
       
        try {

            $consultores = Consultor::where('id', $id)->orderBy('id','dsc')->with('ats')->first();

            return Response()->json($consultores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function especialidad($id) {
       
        try {

            $consultores = Especialidad::where('especialidad_id', $id)->orderBy('id','dsc')->with('consultor', 'especialidad')->get();

            return Response()->json($consultores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $consultor = Consultor::find($id);
            return Response()->json($consultor, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(ConsultorRequest $request)
    {
        try {

            if($request->id){
                $consultor = Consultor::find($request->id);
            }
            else{
                $consultor = new Consultor;
            }
            
            $consultor->fill($request->all());
            $consultor->save();

            return Response()->json($consultor, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $consultor = Consultor::find($id);
            $consultor->delete();

            return Response()->json($consultor, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

}
