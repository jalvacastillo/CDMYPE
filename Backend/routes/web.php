<?php


Route::get('/', 			function () { 
    $noticias = App\Models\Noticia::orderBy('id','asc')->take(6)->get();
    return view('home.index', compact('noticias'));
});
Route::get('/nosotros',     function () { 
    $asesores = App\User::orderBy('id','asc')->get();
    return view('nosotros.index', compact('asesores'));
});
Route::get('/servicios',    function () { return view('servicios.index');   });
Route::get('/clientes',     function () { 
    $clientes = App\Models\Cliente\Cliente::orderBy('id','asc')->with('empresa')->paginate(12);
    return view('clientes.index', compact('clientes'));  
});
Route::get('/pasantias',    function () { 
    $pasantias = App\Models\Proyecto::where('estado', 'Activo')->orderBy('id','asc')->paginate(7);
    return view('pasantias.index', compact('pasantias'));   
});
Route::get('/noticias',     function () { 
    $noticias = App\Models\Noticia::orderBy('id','asc')->paginate(5);
    return view('noticias.index', compact('noticias'));
});
Route::get('/contactos',    function () { return view('contactos.index');   });
Route::post('/contactos',    function () {
    try {
        $msj = \Request::all();
        Mail::send('dash.emails.contact', ['msj' => $msj], function ($m) use ($msj) {
            $m->to($msj['correo'], $msj['nombre'])->subject('Mensaje de la página web');
        });
        return redirect()->back()->with('message', 'Gracias por escribirnos!');
    } catch (Exception $e) {
        return redirect()->back()->with('message', 'No se pudo enviar!');
    }
});

Route::get('/oferta-at/{id}',   'DashController@oferta');
Route::post('/oferta-at/{id}', 	'At\ConsultorController@oferta');
