<?php

namespace App\Http\Controllers\Empresas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas\Empresa;

class EmpresasController extends Controller
{
	

	public function index() {
	   
		$empresas = Empresa::orderBy('id','dsc')->paginate(7);

		return Response()->json($empresas, 200);

	}


	public function read($id) {

		$empresa = Empresa::where('id', $id)->with('empresarios.empresario','productos', 'indicadores', 'proyectos.acciones', 'proyectos.asesor')->firstOrFail();
		return Response()->json($empresa, 200);

	}


	public function store(Request $request)
	{

		$request->validate([
		    // 'file'       =>'required',
		   // 'logo'        =>'required',
			'nombre'        =>'required',
			'estado' 		=>'required',
			'procedencia' 	=>'required',
			'nit' 			=>'required',
			'iva' 			=>'required',
			'direccion'		=>'required',
			'municipio' 	=>'required',
			'departamento'  =>'required',
			'sector'  		=>'required',
			'tamano'  		=>'required',
		]);

		if($request->id)
		    $empresa = Empresa::findOrFail($request->id);
		else
		    $empresa = new Empresa;
		
		if ($request->hasFile('file')) {
		        
		    $file = $request->file;
		    $ruta = public_path() . '/img/empresas';
		    if ($empresa->logo) { \File::delete($ruta . $empresa->logo); }
		    $file->move($ruta, $request->logo);
		}
		
		$empresa->fill($request->all());
		$empresa->save();

		return Response()->json($empresa, 200);

	}

	public function delete($id)
	{
		$empresa = Empresa::findOrFail($id);
		$empresa->delete();

		return Response()->json($empresa, 201);

	}

	public function search($txt) {

		$empresas = Empresa::where('nombre', 'like' ,'%' . $txt . '%')->paginate(7);
		return Response()->json($empresas, 200);

	}

}
