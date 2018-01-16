<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use App\User;
use App\Models\Noticia;
use App\Models\Proyecto;
use App\Models\Cliente\Cliente;

class HomeController extends Controller
{
    
    public function index(){

        $noticias = Noticia::orderBy('id','asc')->take(6)->get();
        return view('home.index', compact('noticias'));

    }

    public function nosotros(){
        $asesores = User::orderBy('id','asc')->get();
        return view('nosotros.index', compact('asesores'));
    }

    public function servicios(){
        return view('servicios.index');   
    }
    
    public function clientes(){
        $clientes = Cliente::orderBy('id','asc')->with('empresa')->paginate(12);
        return view('clientes.index', compact('clientes'));   
    }

    public function cliente($id){
        $cliente = Cliente::find($id);
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
        $noticias = Noticia::orderBy('id','asc')->paginate(5);
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
