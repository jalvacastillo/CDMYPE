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

Route::get('/',           'HomeController@index')->name('inicio');
Route::get('/servicios',  'HomeController@servicios')->name('servicios');
    Route::get('/servicio/{slug}',  'HomeController@servicio')->name('servicio');
Route::get('/nosotros',   'HomeController@nosotros')->name('nosotros');

Route::get('/empresas',   'HomeController@empresas')->name('empresas');
    Route::get('/empresa/{id}',   'HomeController@empresa')->name('empresa');
    Route::get('/registro',   'HomeController@registro')->name('registro');
    Route::post('/registro',   'HomeController@registrofrm');

    // Guia
    Route::get('/guia/tipo',   'HomeController@guiaTipo')->name('guiaTipo');

Route::get('/academia',  'HomeController@academia')->name('academia');
Route::get('/actividades',  'HomeController@actividades')->name('actividades');
Route::get('/noticias',   'HomeController@noticias')->name('noticias');
    Route::get('/noticias/categoria/{cat}',   'HomeController@noticiasCategoria');
    Route::get('/noticia/{slug}',   'HomeController@noticia');
Route::get('/contactos',  'HomeController@contactos')->name('contactos');
    Route::post('/contactos', 'HomeController@contactosfrm');
Route::get('/cuenta',  'UsuarioController@index')->name('cuenta')->middleware('auth');

Route::get('/oferta-at/{id}',   'DashController@oferta');
Route::post('/oferta-at/{id}',  'At\ConsultorController@oferta');

Route::get('/politicas-de-privacidad', 	'HomeController@privacidad');


Auth::routes();
Route::get('auth/{provider}',           'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback',  'Auth\SocialAuthController@handleProviderCallback');
