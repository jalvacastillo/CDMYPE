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

Route::get('/',           'HomeController@index');
Route::get('/nosotros',   'HomeController@nosotros');
Route::get('/servicios',  'HomeController@servicios');
Route::get('/clientes',   'HomeController@clientes');
    Route::get('/cliente/{id}',   'HomeController@cliente');
    Route::get('/registro',   'HomeController@registro');
    Route::post('/registro',   'HomeController@registrofrm');
Route::get('/pasantias',  'HomeController@pasantias');
Route::get('/noticias',   'HomeController@noticias');
Route::get('/contactos',  'HomeController@contactos');
Route::post('/contactos', 'HomeController@contactosfrm');

Route::get('/oferta-at/{id}',   'DashController@oferta');
Route::post('/oferta-at/{id}', 	'At\ConsultorController@oferta');

Auth::routes();
