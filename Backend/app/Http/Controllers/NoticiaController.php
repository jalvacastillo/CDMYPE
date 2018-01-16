<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;

use App\Models\Noticia;

class NoticiaController extends Controller
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

        $noticia->fill($request->all());
        $noticia->slug  = str_slug($request->titulo, '-');
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
