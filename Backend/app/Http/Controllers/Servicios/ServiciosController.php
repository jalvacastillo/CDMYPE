<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Servicios\ServicioRequest;
use App\Models\Servicios\Servicio;

class ServiciosController extends Controller
{
    

    public function index() {
       
        $servicios = Servicio::orderBy('id','dsc')->paginate(7);

        return Response()->json($servicios, 200);

    }


    public function search($txt) {

        $servicios = Servicio::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($servicios, 200);

    }

    public function read($id) {

        $servicio = Servicio::where('id', $id)->with('acciones.indicadores','asesores')->first();
        return Response()->json($servicio, 200);

    }


    public function store(ServicioRequest $request)
    {
        if($request->id){
            $servicio = Servicio::findOrFail($request->id);
        }
        else{
            $servicio = new Servicio;
        }
        
        $servicio->fill($request->all());
        $servicio->save();

        return Response()->json($servicio, 200);

    }

    public function delete($id)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();

        return Response()->json($servicio, 201);

    }


}
