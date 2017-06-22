<?php 

// Especialidades

    Route::get('/especialidades',        'EspecialidadController@index');
    Route::post('/especialidad',         'EspecialidadController@store');
    Route::get('/especialidad/{id}',     'EspecialidadController@read');
    Route::delete('/especialidad/{id}',  'EspecialidadController@delete');


?>