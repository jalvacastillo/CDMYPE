<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class UsuarioController extends Controller
{
    

    public function index(Request $request){
       
        $usuario = User::where('id', Auth::user()->id)->firstOrFail();

        $historial = $usuario->aplicaciones()->get();

        if ($request->ajax()) {
            return response()->json(['usuario' => $usuario, 'historial' => $historial]);
        }

        return view('usuario.index', compact('usuario', 'historial'));

    }

    public function store(Request $request){
       
        $usuario = User::findOrFail($request->id);

        if ($request->password) {
            $request['password'] = \Hash::make($request->password);
        }

        if ($request->tipo == 'Consultor') {
            $consultor = Auth::user()->consultor()->first();
            $consultor->fill($request->detalle);
            $consultor->save();
        }
        if ($request->tipo == 'Estudiante') {
            $alumno = Auth::user()->alumno()->first();
            $alumno->fill($request->detalle);
            $alumno->save();
        }
        
        $usuario->fill($request->all());
        $usuario->save();

        if ($request->ajax()) {
            $usuario = User::where('id', Auth::user()->id)->firstOrFail();
            return response()->json(['usuario' => $usuario]);
        }

        return view('usuario.index', compact('usuario'));

    }

}
