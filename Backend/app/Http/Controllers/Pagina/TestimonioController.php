<?php

namespace App\Http\Controllers\Pagina;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pagina\TestimonioRequest;
use App\Models\Pagina\Testimonio;

class TestimonioController extends Controller
{
    public function index() {
       
        $testimonios = Testimonio::orderBy('id','dsc')->paginate(7);

        return Response()->json($testimonios, 200);

    }

    public function read($id) {

        $testimonio = Testimonio::findOrFail($id);
        return Response()->json($testimonio, 200);

    }

    public function store(TestimonioRequest $request)
    {
        if($request->id){
            $testimonio = Testimonio::findOrFail($request->id);
        }
        else{
            $testimonio = new Testimonio;
        }

        $testimonio->fill($request->all());
        $testimonio->save();

        return Response()->json($testimonio, 200);

    }

    public function delete($id)
    {
        $testimonio = Testimonio::findOrFail($id);
        $testimonio->delete();

        return Response()->json($testimonio, 201);

    }

    public function search($txt) {

        $testimonios = Testimonio::where('titulo', 'like' ,'%' . $txt . '%')->paginate(7);
        return Response()->json($testimonios, 200);

    }

}
