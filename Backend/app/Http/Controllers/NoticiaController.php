<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaRequest;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index() {
       
        try {

            $noticias = Noticia::orderBy('id','dsc')->paginate(7);

            return Response()->json($noticias, 200);
            
        } catch (Exception $e) {

            return Response()->json($e, 500);

        }

    }

    public function read($id) {
        try {

            $noticia = Noticia::find($id);
            return Response()->json($noticia, 200);
            
        } catch (Exception $e) {
            return Response()->json($e, 500);
        }
    }

    public function store(NoticiaRequest $request)
    {
        try {

            if($request->id){
                $noticia = Noticia::find($request->id);
            }
            else{
                $noticia = new Noticia;
            }

            $noticia->fill($request->all());
            $noticia->slug  = str_slug($request->titulo, '-');
            $noticia->save();

            return Response()->json($noticia, 200);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }

    public function delete($id)
    {
        try{

            $noticia = Noticia::find($id);
            $noticia->delete();

            return Response()->json($noticia, 201);

        } catch (Exception $e) {
            return Response()->json($e, 500);
        }

    }
}
