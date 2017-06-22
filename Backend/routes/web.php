<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 			function () { return view('home.index'); 		});
Route::get('/nosotros', 	function () { return view('nosotros.index'); 	});
Route::get('/servicios',    function () { return view('servicios.index');   });
Route::get('/clientes', 	function () { return view('clientes.index'); 	});
Route::get('/pasantias', 	function () { return view('pasantias.index'); 	});
Route::get('/noticias', 	function () { 
    $noticias = App\Models\Noticia::all();
    return view('noticias.index', $noticias); 	
});
Route::get('/contactos', 	function () { return view('contactos.index'); 	});

