<?php 

// Servicios

    Route::get('/servicios',               'Servicios\ServiciosController@index');
    Route::get('/servicio/{id}',           'Servicios\ServiciosController@read');
    Route::post('/servicio/buscar',        'Servicios\ServiciosController@search');
    Route::post('/servicio',               'Servicios\ServiciosController@store');
    Route::delete('/servicio/{id}',        'Servicios\ServiciosController@delete');

    Route::post('/servicio/asesor',               'Servicios\AsesoresController@store');
    Route::delete('/servicio/asesor/{id}',        'Servicios\AsesoresController@delete');

    Route::post('/servicio/accion',               'Servicios\AccionesController@store');
    Route::delete('/servicio/accion/{id}',        'Servicios\AccionesController@delete');

    Route::post('/servicio/accion/indicador',               'Servicios\IndicadoresController@store');
    Route::delete('/servicio/accion/indicador/{id}',        'Servicios\IndicadoresController@delete');

?>
