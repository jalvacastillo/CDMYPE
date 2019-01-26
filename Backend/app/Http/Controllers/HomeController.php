<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Mail;
use Auth;

use App\Models\Servicios\Servicio;
use App\Models\Servicios\Accion;
use App\Models\Pagina\Noticia;
use App\Models\Proyectos\Proyecto;
use App\Models\Pagina\Resultado;

use App\Models\Pagina\Equipo;
use App\Models\Pagina\Testimonio;

use App\Models\Empresas\Empresa;
use App\Models\Empresas\Empresario;

class HomeController extends Controller
{
    
    public function index(){
        $asesorias = Servicio::where('tipo', 'Asesoria')->get();
        $otros = Servicio::where('tipo', 'Otro')->get();

        $noticias = Noticia::orderBy('id','asc')->take(6)->get();
        $testimonios = Testimonio::orderBy('id','asc')->take(2)->get();
        $resultados = Resultado::all();

        return view('home.index', compact('asesorias','otros','noticias', 'resultados', 'testimonios'));
    }
    public function nosotros(){
        $asesores = Equipo::where('web', 1)->orderBy('id','asc')->get();
        $testimonios = Testimonio::orderBy('id','asc')->take(2)->get();

        return view('nosotros.index', compact('asesores', 'testimonios'));
    }

    public function servicios(){
        $asesorias = Servicio::where('tipo', 'Asesoria')->get();
        $otros = Servicio::where('tipo', 'Otro')->get();

        return view('servicios.index', compact('asesorias','otros'));   
    }

    public function servicio($slug){
        $servicio = Servicio::with('acciones.indicadores', 'asesores')->where('slug', $slug)->first();
        return view('servicios.servicio.index', compact('servicio'));
    }

    public function accion($s_slug, $a_slug){
        $nombre = ucwords(str_replace('-', ' ', $a_slug));
        $accion = Accion::with('indicadores')->where('nombre', 'like', $nombre)->first();

        $indicadores = $accion->indicadores()->pluck('indicador')->all();

        $noticias = Noticia::whereIn('tipo', $indicadores)->get();

        return view('servicios.accion.index', compact('accion', 'noticias'));
    }

    public function noticias(){
        $categorias = Noticia::where('activo', 1)->selectRaw('count(*) as total, categoria')->groupBy('categoria')->get();
        $noticias = Noticia::where('activo', 1)->orderBy('id','dsc')->paginate(5);

        return view('noticias.index', compact('noticias', 'categorias'));
    }

    public function noticiasCategoria($categoria){
        $categoria = ucwords(str_replace('-', ' ', $categoria)); 

        $categorias = Noticia::where('activo', 1)->selectRaw('count(*) as total, categoria')->groupBy('categoria')->get();
        $noticias = Noticia::where('activo', 1)->where('Categoria', 'like', $categoria)->orderBy('id','dsc')->paginate(5);

        return view('noticias.index', compact('noticias', 'categorias'));
    }
    public function noticia($slug){
        $noticia = Noticia::where('slug', $slug)->orderBy('id','asc')->first();
        // dd($request->header('User-Agent'));
        $noticia->views ++;
        $noticia->save();

        return view('noticias.noticia.index', compact('noticia'));
    }
    public function categoria($cat){
        $noticias = Noticia::where('categoria', $cat)->orderBy('id','asc')->paginate(7);
        return view('noticias.index', compact('noticias'));
    }
    public function contactos(){
        return view('contactos.index');
    }
    public function contactosfrm(Request $request){
        try {
            Mail::send('dash.emails.contact', ['request' => $request], function ($m) use ($request) {
                $m->from('cdmype.ilobasco@gmail.com', 'CDMYPE')
                ->to($request['correo'], 'CDMYPE')
                ->subject('CDMYPE');
            });
            
            if ($request->ajax()) {
                return response()->json(['msj' => 'Gracias por escribirnos!']);
            }

            return redirect()->back()->with('message', 'Gracias por escribirnos!');
        } catch (Exception $e) {
            if ($request->ajax()) {
                return response()->json(['msj' => 'No se pudo enviar!']);
            }
            return redirect()->back()->with('message', 'No se pudo enviar!');
        }
    }
}