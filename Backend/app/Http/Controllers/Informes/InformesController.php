<?php

namespace App\Http\Controllers\Informes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informes\Informe;
use App\Models\Actividades\Actividad;
use App\Models\Empresas\Accion;
use App\Models\Vinculaciones\Vinculacion;
use App\Models\Coordinaciones\Coordinacion;

class InformesController extends Controller
{

    public function index() {

        $informes = Informe::orderBy('id','dsc')->paginate(7);

        return Response()->json($informes, 200);

    }

    public function read($id) {

        $informe = Informe::where('id', $id)->firstOrFail();
        return Response()->json($informe, 200);

    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo'            => 'required',
            'periodo_inicio'    => 'required',
            'periodo_fin'       => 'required',
            'introduccion'      => 'required',
            'objetivo'          => 'required',
            'conclusion'        => 'required',
            'recomendacion'     => 'required'
        ]);

        if($request->id)
            $informe = Informe::findOrFail($request->id);
        else
            $informe = new Informe;

        $informe->fill($request->all());
        $informe->save();        

        return Response()->json($informe, 200);

    }
    public function InformeMensualPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $informe = Informe::where('id', decrypt($id))->firstOrFail();
        
        $informe->mes = date('F, Y', strtotime($informe->periodo_inicio));


        $informe->actividades = Actividad::whereBetween('fecha_inicio', [$informe->periodo_inicio, $informe->periodo_fin])
                                ->orderBy('fecha_inicio')
                                ->get();
        $informe->actividades_categoria = Actividad::whereBetween('fecha_inicio', [$informe->periodo_inicio, 
                                        $informe->periodo_fin])
                                        ->selectRaw('tipo, count(*) as total')
                                        ->groupBy('tipo')->get();

        $informe->asesorias_categoria = Accion::whereBetween('fin', [$informe->periodo_inicio, $informe->periodo_fin])
                                ->selectRaw('categoria, count(*) as total')
                                ->groupBy('categoria')
                                ->get();

        $informe->coordinaciones = Coordinacion::whereBetween('fecha', [$informe->periodo_inicio, $informe->periodo_fin])
                                 ->orderBy('fecha')
                                 ->get();

        $informe->vinculaciones = Vinculacion::whereBetween('fecha', [$informe->periodo_inicio, $informe->periodo_fin])
                                 ->orderBy('fecha')
                                 ->get();
                                 
        //return Response()->json($informe->vinculaciones, 200);
        
        $inform = \PDF::loadView('pdf.informes.mensual', compact('informe'));

        return $inform->stream();

    }

}
