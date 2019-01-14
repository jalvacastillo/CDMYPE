<?php 

// Servicios

    Route::get('/servicios',               'Servicios\ServiciosController@index');
    Route::get('/servicio/{id}',           'Servicios\ServiciosController@read');
    Route::post('/servicio/buscar',        'Servicios\ServiciosController@search');
    Route::post('/servicio',               'Servicios\ServiciosController@store');
    Route::delete('/servicio/{id}',        'Servicios\ServiciosController@delete');

    Route::get('/servicios/asesores',             'Servicios\AsesorController@index');
    Route::get('/servicio/asesor/{id}',           'Servicios\AsesorController@read');
    Route::post('/servicio/asesor/buscar',        'Servicios\AsesorController@search');
    Route::post('/servicio/asesor',               'Servicios\AsesorController@store');
    Route::delete('/servicio/asesor/{id}',        'Servicios\AsesorController@delete');

    Route::get('/servicios/acciones',             'Servicios\AccionesController@index');
    Route::get('/servicio/accion/{id}',           'Servicios\AccionesController@read');
    Route::post('/servicio/accion/buscar',        'Servicios\AccionesController@search');
    Route::post('/servicio/accion',               'Servicios\AccionesController@store');
    Route::delete('/servicio/accion/{id}',        'Servicios\AccionesController@delete');

?>
