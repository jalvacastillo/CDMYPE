<?php


Route::get('/',           'PaginaController@index');
Route::get('/nosotros',   'PaginaController@nosotros');
Route::get('/servicios',  'PaginaController@servicios');
Route::get('/clientes',   'PaginaController@clientes');
    Route::get('/cliente/{id}',   'PaginaController@cliente');
    Route::get('/registro',   'PaginaController@registro');
    Route::post('/registro',   'PaginaController@registrofrm');
Route::get('/pasantias',  'PaginaController@pasantias');
Route::get('/noticias',   'PaginaController@noticias');
Route::get('/contactos',  'PaginaController@contactos');
Route::post('/contactos', 'PaginaController@contactosfrm');

Route::get('/oferta-at/{id}',   'DashController@oferta');
Route::post('/oferta-at/{id}', 	'At\ConsultorController@oferta');
