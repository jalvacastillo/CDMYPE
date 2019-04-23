<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Pagina\Noticia;

class NoticiasController extends Controller
{

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

}