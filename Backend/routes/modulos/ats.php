<?php 

    Route::get('/ats',              'Ats\AtsController@index');
    Route::get('/ats/buscar/{txt}',     'Ats\AtsController@search');
    Route::get('/at/{id}',          'Ats\AtsController@read');
    Route::post('/at',              'Ats\AtsController@store');
    Route::delete('/at/{id}',       'Ats\AtsController@delete');

    // Route::get('/consultor/historial/{id}',         'Ats\AtsController@historial');

    // Route::get('/consultor/especialidades',     'Ats\EspecialidadController@index');
    // Route::post('/consultor/especialidad',          'Ats\EspecialidadController@store');
    // Route::get('/consultor/especialidad/{id}',      'Ats\EspecialidadController@read');
    // Route::delete('/consultor/especialidad/{id}',   'Ats\EspecialidadController@delete');

?>