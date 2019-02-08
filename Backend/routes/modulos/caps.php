<?php 

    Route::get('/caps',              'Caps\CapsController@index');
    Route::get('/caps/buscar/{txt}', 'Caps\CapsController@search');
    Route::get('/cap/{id}',          'Caps\CapsController@read');
    Route::post('/cap',              'Caps\CapsController@store');
    Route::delete('/cap/{id}',       'Caps\CapsController@delete');

    // Route::get('/consultor/historial/{id}',         'Caps\CapsController@historial');

    // Route::get('/consultor/especialidades',     'Caps\EspecialidadController@index');
    // Route::post('/consultor/especialidad',          'Caps\EspecialidadController@store');
    // Route::get('/consultor/especialidad/{id}',      'Caps\EspecialidadController@read');
    // Route::delete('/consultor/especialidad/{id}',   'Caps\EspecialidadController@delete');

?>