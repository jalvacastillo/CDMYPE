<?php 

// Acciones

    Route::get('/acciones',                'Empresas\ProyectoAccionesController@index');
    Route::get('/accion/{id}',            'Empresas\ProyectoAccionesController@read');
    Route::get('/acciones/buscar/{text}',  'Empresas\ProyectoAccionesController@search');
    Route::post('/accion',                'Empresas\ProyectoAccionesController@store');
    Route::delete('/accion/{id}',         'Empresas\ProyectoAccionesController@delete');

// Select
    route::get('proyectos/accion/{id}',           'Asesores\AccionesController@acciones');
    route::get('proyectos/acciones/{id}',          'Asesores\AccionesController@accion');

// asesorias 
    Route::get('/asesorias',                'Empresas\EmpresaAsesoriasController@index');
    Route::get('/asesoria/{id}',            'Empresas\EmpresaAsesoriasController@read');
    Route::post('/asesoria',                'Empresas\EmpresaAsesoriasController@store');
    Route::delete('/asesoria/{id}',         'Empresas\EmpresaAsesoriasController@delete');