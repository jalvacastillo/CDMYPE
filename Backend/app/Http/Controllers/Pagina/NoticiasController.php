<?php

namespace App\Http\Controllers\Pagina;


use App\Http\Controllers\Controller;
use App\Http\Requests\Pagina\NoticiaRequest;
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

    public function store(NoticiaRequest $request)
    {
        if($request->id){
            $noticia = Noticia::findOrFail($request->id);
        }
        else{
            $noticia = new Noticia;
        }

        if ($request->hasFile('file')) {
                
            $file = $request->file;
            $ruta = public_path() . '/imgs/noticias';
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
