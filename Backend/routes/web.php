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


Route::get('at/tdr/{id}',               'Ats\AtsController@tdrPDF')->name('atTdrPDF');
Route::get('at/contrato/{id}',          'Ats\ContratosController@contratoPDF')->name('atContratoPDF');
Route::get('at/acta/{id}',              'Ats\ActasController@actaPDF')->name('atActaPDF');
Route::get('at/ampliacion/{id}',        'Ats\AmpliacionesController@ampliacionPDF')->name('atAmpliacionPDF');
Route::get('at/pago-aporte/{id}',       'Ats\ActasController@aportePDF')->name('atAportePDF');
Route::get('at/recibo-aporte/{id}',     'Ats\ActasController@reciboPDF')->name('atReciboPDF');
Route::get('at/acta-recepcion/{id}',    'Ats\ActasController@recepcionPDF')->name('atRecepcionPDF');

Route::get('cap/tdr/{id}',               'Caps\CapsController@tdrPDF')->name('capTdrPDF');
Route::get('cap/contrato/{id}',          'Caps\ContratosController@contratoPDF')->name('capContratoPDF');
Route::get('cap/asistencia/{id}',        'Caps\EmpresariosController@asistenciaPDF')->name('capAsitenciaPDF');
Route::get('cap/ampliacion/{id}',        'Caps\AmpliacionesController@ampliacionPDF')->name('capAmpliacionPDF');
Route::get('cap/pago-aporte/{id}',       'Caps\ActasController@aportePDF')->name('capAportePDF');
Route::get('cap/recibo-aporte/{id}',     'Caps\ActasController@reciboPDF')->name('capReciboPDF');
Route::get('cap/acta-recepcion/{id}',    'Caps\ActasController@recepcionPDF')->name('capRecepcionPDF');

Route::get('/oferta-at/{at}/{consultor}',   'Ats\ConsultoresController@oferta')->name('subirOfertaAt');
Route::post('/oferta-at',                   'Ats\ConsultoresController@guardarOferta')->name('guardarOfertaAt');

Route::get('/oferta-cap/{cap}/{consultor}',   'Caps\ConsultoresController@oferta')->name('subirOfertaCap');
Route::post('/oferta-cap',                   'Caps\ConsultoresController@guardarOferta')->name('guardarOfertaCap');

Route::get('/salida/{firma}/{ano}/{mes}', 'Salidas\SalidasController@pdf')->name('salidasPdf');

Route::get('formato/{doc}', function($doc){
        return Redirect::to('formatos/'. $doc);
})->name('formatos');

Route::get('at/informes/{doc}', function($doc){ return Redirect::to('informes/'. $doc); })->name('informes');
Route::get('cap/informes/{doc}', function($doc){ return Redirect::to('informes/'. $doc); })->name('informes');


Auth::routes();

Route::get('auth/{provider}',           'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback',  'Auth\SocialAuthController@handleProviderCallback');
