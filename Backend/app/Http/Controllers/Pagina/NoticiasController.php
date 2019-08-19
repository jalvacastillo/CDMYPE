<?php

namespace App\Http\Controllers\Pagina;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pagina\Noticia;

class NoticiasController extends Controller
{
    public function index() {
       
        $noticias = Noticia::orderBy('id','dsc')->paginate(7);

        return Response()->json($noticias, 200);

    }

    public function read($id) {

        $noticia = Noticia::findOrFail($id);
        return Response()->json($noticia, 200);

    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo'        => 'required|max:255',
            'slug'          => 'required|unique:noticias,slug,'. $request->id,
            'descripcion'   => 'required',
            'file'          => 'mimes:jpeg,png,jpg|max:40000',
            'img'           => 'required',
            'categoria'     => 'required',
            'asesor_id'     => 'required'
        ]);

        if($request->id)
            $noticia = Noticia::findOrFail($request->id);
        else
            $noticia = new Noticia;

        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/img/noticias';
            if ($noticia->img) { \File::delete($ruta . $noticia->img); }
            $file->move($ruta, $request->img);
        } 

        $noticia->fill($request->all());
        $noticia->save();

        return Response()->json($noticia, 200);

    }

    public function delete($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return Response()->json($noticia, 201);

    }

    public function search($txt) {

        $noticias = Noticia::where('titulo', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($noticias, 200);

    }

}
