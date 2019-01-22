<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/prueba', function(){ return Response()->json(['message' => 'Success'], 200); });

Route::post('/login', 'Auth\AuthJWTController@login');
Route::post('/register', 'Auth\AuthJWTController@register');


// Route::group(['middleware' => ['jwt.auth']], function () {

	// Dashboard
		require base_path('routes/modulos/dash.php');
	
		require base_path('routes/modulos/servicios.php');
		require base_path('routes/modulos/proyectos.php');
		require base_path('routes/modulos/diagnosticos.php');
		
		require base_path('routes/modulos/empresas.php');
		require base_path('routes/modulos/consultores.php');
		require base_path('routes/modulos/pagina.php');
		require base_path('routes/modulos/usuarios.php');
		// require base_path('routes/modulos/compras.php');
		// require base_path('routes/modulos/clientes.php');
		// require base_path('routes/modulos/proveedores.php');
		// require base_path('routes/modulos/productos.php');
		
		// require base_path('routes/modulos/usuarios.php');
		require base_path('routes/modulos/empresa.php');
		

// });
