<?php

namespace App\Http\Controllers\At;

use App\Http\Controllers\Controller;

use App\Http\Requests\AtConsultorRequest;
use Illuminate\Http\Request;
use Mail;

use App\Models\At\Consultor;
use App\Models\At\Termino;

class ConsultorController extends Controller
{
    

    public function index($id) {
       
        try {

            $consultores = Consultor::where('termino_id', $id)->with('consultor')->orderBy('id','dsc')->get();

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

    public function store(AtConsultorRequest $request)
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


    public function enviartdr(Request $request) {
        try {

            if ($request['consultores'] != []) {


                foreach ($request->consultores as $consultor) {
                    // Si y existe el consultor
                    if ($consultor['consultor']['correo']){
                        $atconsultor = Consultor::where('termino_id', $request->id)->where('consultor_id', $consultor['consultor_id'])->first();
                        if (!$atconsultor) {
                            $atconsultor = new Consultor;
                            $atconsultor->termino_id = $request->id;
                            $atconsultor->consultor_id = $consultor['consultor_id'];
                            $atconsultor->save();
                            
                            if ($this->correo($request, $consultor['consultor'], $atconsultor)) {}
                        }else{
                            if ($this->correo($request, $consultor['consultor'], $atconsultor)) {}
                        }
                    }
                }
            }

            return Response()->json($request, 200);
            
        } catch (Exception $e) {
            // Si hay error de servidor se envia el error
            return Response()->json($e, 500);
        }
    }

    public function correo($at, $consultor, $atconsultor){
        try {
            Mail::send('dash.emails.tdr', ['at' => $at, 'atconsultor' => $atconsultor], function ($m) use ($at, $consultor, $atconsultor) {
                $m->to($consultor['correo'], $consultor['nombre'])->subject('TDR - ' . $at->tema);
            });
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function ofertantes($id) {
       
        try {

            $consultores = Consultor::where('termino_id', $id)->where('doc_oferta', "!=", "")->with('consultor')->orderBy('id','dsc')->get();

            return Response()->json($consultores, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function oferta(Request $request){
        try {

            if ($request->hasFile('file')) {
                $consultor = Consultor::Find($request->consultor_id);
                
                if ($consultor) {
                    $file = $request->file;
                    $ruta = base_path() . '/public/ofertas/';
                    $nombre = time().$file->getClientOriginalName();
                    $file->move($ruta, $nombre);
                    $consultor->doc_oferta = $nombre;
                    $consultor->fecha_oferta = date("Y-m-d");
                    $consultor->save();
                }
            } 
            
            return Response()->json($nombre, 200);


        } catch (Exception $e) {
            // Si hay error de servidor se envia el error
            return Response()->json($e, 500);
        }
    }


    public function seleccionar(Request $request){
       try {
           
           $at = Termino::find($request->id);
           $consultores = $at->consultores;

           foreach ($consultores as $con) {
               if ($con->id == $request->consultor_id) {
                    $consultorSeleccionado = Consultor::find($con->id);
                    $consultorSeleccionado->estado = 'Seleccionado';
                    $consultorSeleccionado->fecha_seleccion = date("Y-m-d");
                    $consultorSeleccionado->save();
               }else{
                    $consultor = Consultor::find($con->id);
                    $consultor->estado = 'Enviado';
                    $consultor->save();
               }
           }
           
           return Response()->json($request, 201);


       } catch (Exception $e) {
           // Si hay error de servidor se envia el error
           return Response()->json($e, 500);
       } 
    }

}
