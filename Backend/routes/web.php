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

// Servicios
Route::get('/servicios',                        'ServiciosController@servicios' )->name('servicios');
    Route::get('/servicio/{slug}',              'ServiciosController@servicio'  )->name('servicio');
    Route::get('/servicio/{s_slug}/{a_slug}',   'ServiciosController@accion'    )->name('accion');
    Route::get('/servicios/diagnosticos/{slug}',  'ServiciosController@diagnostico')->name('diagnostico');
    Route::post('/servicios/diagnosticos/{slug}',  'ServiciosController@guardarDiagnostico');

// Nosotros
Route::get('/nosotros',   'HomeController@nosotros')->name('nosotros');
    Route::get('/politicas-de-privacidad',  'HomeController@privacidad');
    Route::get('/politicas-de-privacidad',  'HomeController@terminos')->name('terminos');

// Empresas
Route::get('/empresas',         'EmpresasController@empresas'   )->name('empresas');
    Route::get('/empresa/{slug}/{id}', 'EmpresasController@empresa'    )->name('empresa');
    Route::post('/empresas', 'EmpresasController@filtrar'    )->name('filtrarEmpresas');
    
    Route::get('/guia/inicio',     'EmpresasController@paso1')->name('registroCliente');
    Route::get('/guia/necesidad',    'EmpresasController@paso2')->name('paso2');
    Route::get('/guia/registro',    'EmpresasController@paso3')->name('paso3');

// Academia
Route::get('/academia/proyectos',  'AcademiaController@proyectos')->name('proyectos');
    Route::get('/academia/proyecto/{slug}/{id}',  'AcademiaController@proyecto')->name('proyecto');
    Route::post('/academia/proyecto/{slug}/{id}',  'AcademiaController@aplicacion')->name('aplicarProyecto');
    Route::post('/academia/proyectos', 'AcademiaController@filtrar'    )->name('filtrarProyectos');

// Actividades
Route::get('/actividades',  'ActividadesController@actividades')->name('actividades');
    Route::get('/actividades/categoria/{slug}',  'ActividadesController@categoria')->name('actividadesCategoria');
    Route::get('/actividades/tipo/{slug}',  'ActividadesController@tipo')->name('actividadesTipo');
    Route::get('/actividad/{slug}/{id}',  'ActividadesController@actividad')->name('actividad');
    Route::post('/actividad/aplicacion',  'ActividadesController@aplicacion')->name('aplicarActividad');
    Route::post('/actividades/actividad', 'ActividadesController@filtrar'    )->name('filtrarActividades');

    Route::get('/actividades/calendario', 'ActividadesController@calendario')->name('actividadesCalendario');

// Noticias
Route::get('/noticias',                     'NoticiasController@noticias')->name('noticias');
    Route::get('/noticias/categoria/{cat}', 'NoticiasController@noticiasCategoria');
    Route::get('/noticia/{slug}',           'NoticiasController@noticia');

// Contactos
Route::get('/contactos',  'HomeController@contactos')->name('contactos');
    Route::post('/contactos', 'HomeController@contactosfrm');

// Cuenta
Route::get('/cuenta',  'UsuarioController@index')->name('usuario')->middleware('auth');
    Route::post('/cuenta',  'UsuarioController@store')->middleware('auth');

Route::get('/oferta-at/{id}',   'DashController@oferta');
Route::post('/oferta-at/{id}',  'At\ConsultorController@oferta');



Auth::routes();

Route::get('auth/{provider}',           'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback',  'Auth\SocialAuthController@handleProviderCallback');
