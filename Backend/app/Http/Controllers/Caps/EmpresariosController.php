<?php

namespace App\Http\Controllers\Caps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caps\Asistencia as Empresario;

class EmpresariosController extends Controller
{

    public function read($id) {

        $empresarios = Empresario::where('cap_id', $id)->get();
        return Response()->json($empresarios, 200);

    }


    public function store(Request $request)
    {
        $request->validate([
            'empresario_id'   => 'required',
            'asistencia'   => 'required',
            'cap_id'        => 'required',
        ]);

        if($request->id)
            $empresario = Empresario::findOrFail($request->id);
        else
            $empresario = new Empresario;
        
        $empresario->fill($request->all());
        $empresario->save();

        return Response()->json($empresario, 200);

    }

    public function delete($id)
    {
        $empresario = Empresario::findOrFail($id);
        $empresario->delete();

        return Response()->json($empresario, 201);

    }

    public function search($txt) {

        $empresarios = Empresario::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($empresarios, 200);

    }

    public function asistenciaPDF($id){

        if (is_numeric($id))
            $id = encrypt($id);

        $cap = \App\Models\Caps\Cap::where('id', decrypt($id))->with('consultor','asesor')->firstOrFail();
        $empresarios = Empresario::where('cap_id', $cap->id)->get();
        $cap->fecha_ini = \Carbon\Carbon::parse($cap->fecha_ini)->format('d-m-Y h:i a');
        $cap->fecha_fin = \Carbon\Carbon::parse($cap->fecha_fin)->format('d-m-Y h:i a');

        $reportes = \PDF::loadView('pdf.caps.asistencia', compact('cap', 'empresarios'))->setPaper('letter','landscape');
        return $reportes->stream();

    }


}
