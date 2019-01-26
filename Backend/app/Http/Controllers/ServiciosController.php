<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servicios\Servicio;
use App\Models\Servicios\Accion;
use App\Models\Pagina\Noticia;

use App\Models\Diagnosticos\Diagnostico;
use App\Models\Diagnosticos\Pregunta;
use App\Models\Diagnosticos\Categoria;

class ServiciosController extends Controller
{
    
    public function servicios(){
        $asesorias = Servicio::where('tipo', 'Asesoria')->get();
        $otros = Servicio::where('tipo', 'Otro')->get();
        $diagnosticos = Diagnostico::where('activo', 1)->get();

        return view('servicios.index', compact('asesorias','otros', 'diagnosticos'));   
    }

    public function servicio($slug){
        $servicio = Servicio::with('acciones.indicadores', 'asesores')->where('slug', $slug)->first();
        $diagnosticos = Diagnostico::where('categoria', $servicio->categoria)->get();
        return view('servicios.servicio.index', compact('servicio', 'diagnosticos'));
    }

    public function accion($s_slug, $a_slug){
        $nombre = ucwords(str_replace('-', ' ', $a_slug));
        $accion = Accion::with('indicadores')->where('nombre', 'like', $nombre)->first();

        $indicadores = $accion->indicadores()->pluck('indicador')->all();

        $noticias = Noticia::whereIn('tipo', $indicadores)->get();

        return view('servicios.accion.index', compact('accion', 'noticias'));
    }

    public function diagnostico($slug){
        $nombre = ucwords(str_replace('-', ' ', $slug));
        $diagnostico = Diagnostico::Where('nombre', 'like', $nombre)->first();
        $preguntas = Pregunta::Where('diagnostico_id', $diagnostico->id)->with('valores')->get();
        $categorias = Categoria::Where('diagnostico_id', $diagnostico->id)->with('subcategorias')->get();

        // return $categorias;

        return view('servicios.diagnostico', compact('diagnostico', 'preguntas', 'categorias'));
    }

    public function guardarDiagnostico(Request $request){
        return $request;
    }

}