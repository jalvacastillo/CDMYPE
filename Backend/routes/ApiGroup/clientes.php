<?php 

// Clientes

    Route::get('/clientes',         'Clientes\ClienteController@index');
    Route::post('/cliente',         'Clientes\ClienteController@store');
    Route::get('/cliente/{id}',     'Clientes\ClienteController@read');
    Route::delete('/cliente/{id}',  'Clientes\ClienteController@delete');

// Empresas

    Route::get('/empresas',         'Clientes\EmpresaController@index');
    Route::post('/empresa',         'Clientes\EmpresaController@store');
    Route::get('/empresa/{id}',     'Clientes\EmpresaController@read');
    Route::delete('/empresa/{id}',  'Clientes\EmpresaController@delete');

// Empresarios

    Route::get('/empresarios',         'Clientes\EmpresarioController@index');
    Route::post('/empresario',         'Clientes\EmpresarioController@store');
    Route::get('/empresario/{id}',     'Clientes\EmpresarioController@read');
    Route::delete('/empresario/{id}',  'Clientes\EmpresarioController@delete');

// Indicadores

    Route::get('/indicadores/{id}',   'Clientes\IndicadorController@index');
    Route::post('/indicador',         'Clientes\IndicadorController@store');
    Route::get('/indicador/{id}',     'Clientes\IndicadorController@read');
    Route::delete('/indicador/{id}',  'Clientes\IndicadorController@delete');

// Proyectos

    Route::get('/proyectos/{id}',   'Clientes\ProyectoController@index');
    Route::post('/proyecto',         'Clientes\ProyectoController@store');
    Route::get('/proyecto/{id}',     'Clientes\ProyectoController@read');
    Route::delete('/proyecto/{id}',  'Clientes\ProyectoController@delete');

// Acciones

    Route::get('/acciones/{id}',   'Clientes\AccionController@index');
    Route::post('/accion',         'Clientes\AccionController@store');
    Route::get('/accion/{id}',     'Clientes\AccionController@read');
    Route::delete('/accion/{id}',  'Clientes\AccionController@delete');

// Historial
    Route::get('/cliente/historial/{id}',   'Clientes\ClienteController@historial');



?>