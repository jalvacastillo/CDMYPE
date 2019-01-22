<?php 

// Proyectos

    Route::get('/proyectos',                'Proyectos\ProyectosController@index');
    Route::get('/proyecto/{id}',            'Proyectos\ProyectosController@read');
    Route::get('/proyectos/buscar/{text}',  'Proyectos\ProyectosController@search');
    Route::post('/proyecto',                'Proyectos\ProyectosController@store');
    Route::delete('/proyecto/{id}',         'Proyectos\ProyectosController@delete');

// Asesores

    Route::post('/proyecto/asesor',                'Proyectos\AsesoresController@store');
    Route::delete('/proyecto/asesor/{id}',         'Proyectos\AsesoresController@delete');

// Empresas

    Route::post('/proyecto/empresa',                'Proyectos\EmpresasController@store');
    Route::delete('/proyecto/empresa/{id}',         'Proyectos\EmpresasController@delete');

// Aplicaciones

    Route::post('/proyecto/aplicacion',                'Proyectos\AplicacionesController@store');
    Route::delete('/proyecto/aplicacion/{id}',         'Proyectos\AplicacionesController@delete');
