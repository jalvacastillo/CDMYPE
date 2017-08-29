<?php

// use Illuminate\Http\Request;

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

// Route::middleware('api')->get('/user', function (Request $request) {
// // Route::middleware('auth:api')->get('/user', function (Request $request) {

//     return "hola";
//     return $request->user();

Route::post('/login', 'AuthController@login');

Route::group(['middleware' => ['jwt.auth']], function () {

    Route::get('/users', 'UserController@index');

    require base_path('routes/ApiGroup/clientes.php');
    require base_path('routes/ApiGroup/consultores.php');
    require base_path('routes/ApiGroup/salidas.php');
    require base_path('routes/ApiGroup/especialidades.php');
    require base_path('routes/ApiGroup/noticias.php');
    require base_path('routes/ApiGroup/proyectos.php');
    require base_path('routes/ApiGroup/asistencias.php');
    require base_path('routes/ApiGroup/capacitaciones.php');
    
});
