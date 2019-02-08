<?php 

// Actividades

    Route::get('/actividades',                'Actividades\ActividadesController@index');
    Route::get('/actividad/{id}',            'Actividades\ActividadesController@read');
    Route::get('/actividades/buscar/{text}',  'Actividades\ActividadesController@search');
    Route::post('/actividad',                'Actividades\ActividadesController@store');
    Route::delete('/actividad/{id}',         'Actividades\ActividadesController@delete');

// Asesores

    Route::post('/actividad/asesor',                'Actividades\AsesoresController@store');
    Route::delete('/actividad/asesor/{id}',         'Actividades\AsesoresController@delete');

// Empresas

    Route::post('/actividad/empresa',                'Actividades\EmpresasController@store');
    Route::delete('/actividad/empresa/{id}',         'Actividades\EmpresasController@delete');

// Aplicaciones

    Route::post('/actividad/aplicacion',                'Actividades\AplicacionesController@store');
    Route::delete('/actividad/aplicacion/{id}',         'Actividades\AplicacionesController@delete');
