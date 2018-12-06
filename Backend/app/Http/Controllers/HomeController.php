<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use App\User;
use App\Models\Pagina\Noticia;
use App\Models\Pagina\Proyecto;
use App\Models\Pagina\Resultado;
use App\Models\Pagina\Testimonio;
use App\Models\Cliente\Cliente;

class HomeController extends Controller
{
    
    public function index(){

        $noticias = Noticia::orderBy('id','asc')->take(6)->get();
        $testimonios = Testimonio::orderBy('id','asc')->take(2)->get();
        $resultados = Resultado::all();

        return view('home.index', compact('noticias', 'resultados', 'testimonios'));

    }

    public function nosotros(){
        $asesores = User::orderBy('id','asc')->get();
        $testimonios = Testimonio::orderBy('id','asc')->take(2)->get();

        return view('nosotros.index', compact('asesores', 'testimonios'));
    }

    public function servicios(){
        return view('servicios.index');   
    }
    
    public function clientes(){
        $clientes = Cliente::where('catalogo', 1)->orderBy('id','asc')->with('empresa', 'empresario')->paginate(12);
        return view('clientes.index', compact('clientes'));   
    }

    public function cliente($id){
        $cliente = Cliente::where('id', $id)->with('empresa', 'empresario')->first();
        return view('clientes.cliente', compact('cliente'));
    }

    public function registro(){
        $cliente = new Cliente;
        return view('clientes.registro', compact('cliente'));
    }

    public function registrofrm(Request $request){

        // return $request;

        return redirect()->back()->with('message', 'Solicitud recibida, pronto nos pondremos en contacto con tigo!');

        $cliente = new Cliente;
    }

    public function pasantias(){
        $pasantias = Proyecto::where('estado', 'Activo')->orderBy('id','asc')->paginate(7);
        return view('pasantias.index', compact('pasantias'));  
    }

    public function noticias(){
        $noticias = Noticia::orderBy('id','dsc')->paginate(5);
        return view('noticias.index', compact('noticias'));
    }

    public function noticia($slug){
        $noticia = Noticia::where('slug', $slug)->orderBy('id','asc')->first();
        return view('noticias.noticia.index', compact('noticia'));
    }

    public function categoria($cat){
        $noticias = Noticia::where('categoria', $cat)->orderBy('id','asc')->paginate(7);
        return view('noticias.index', compact('noticias'));
    }

    public function contactos(){
        return view('contactos.index');
    }

    public function contactosfrm(Request $msj){
        try {

            Mail::send('dash.emails.contact', ['msj' => $msj], function ($m) use ($msj) {
                $m->to($msj['correo'], $msj['nombre'])->subject('Mensaje de la página web');
            });

            return redirect()->back()->with('message', 'Gracias por escribirnos!');

        } catch (Exception $e) {
            return redirect()->back()->with('message', 'No se pudo enviar!');
        }
    }

}
