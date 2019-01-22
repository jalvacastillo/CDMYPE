<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use File;
use Mail;
use App\User;
use App\Models\Servicios\Servicio;
use App\Models\Servicios\Accion;
use App\Models\Pagina\Noticia;
use App\Models\Proyectos\Proyecto;
use App\Models\Pagina\Resultado;
use App\Models\Pagina\Testimonio;
use App\Models\Cliente\Cliente;

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
        $asesores = User::orderBy('id','asc')->get();
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
    
    public function empresas(){
        $empresas = Cliente::where('catalogo', 1)->orderBy('id','asc')->with('empresa', 'empresario')->paginate(12);
        return view('empresas.index', compact('empresas'));   
    }
    public function empresa($id){
        $empresa = Cliente::where('id', $id)->with('empresa', 'empresario')->first();
        return view('empresas.empresa', compact('empresa'));
    }
    public function registro(){
        $empresa = new Cliente;
        return view('empresas.registro', compact('empresa'));
    }
    public function registrofrm(Request $request){
        // return $request;
        return redirect()->back()->with('message', 'Solicitud recibida, pronto nos pondremos en contacto con tigo!');
        $empresa = new Cliente;
    }
    public function guiaTipo(Request $request){
        return $request;
        return redirect()->back()->with('message', 'Solicitud recibida, pronto nos pondremos en contacto con tigo!');
        $empresa = new Cliente;
    }

    public function actividades(){
        $pasantias = Proyecto::where('estado', 'Activo')->orderBy('id','asc')->paginate(7);
        return view('pasantias.index', compact('pasantias'));  
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