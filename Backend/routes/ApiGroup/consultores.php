<?php 

// Consultores

    Route::get('/consultores',        'Consultores\ConsultorController@index');
    Route::post('/consultor',         'Consultores\ConsultorController@store');
    Route::get('/consultor/{id}',     'Consultores\ConsultorController@read');
    Route::delete('/consultor/{id}',  'Consultores\ConsultorController@delete');

// Especialidades

    Route::get('/consultor/especialidades/{id}',        'Consultores\ConsultorEspecialidadController@index');
    Route::post('/consultor/especialidad',         'Consultores\ConsultorEspecialidadController@store');
    Route::get('/consultor/especialidad/{id}',     'Consultores\ConsultorEspecialidadController@read');
    Route::delete('/consultor/especialidad/{id}',  'Consultores\ConsultorEspecialidadController@delete');

// Historial
    Route::get('/consultor/historial/{id}',        'Consultores\ConsultorController@historial');
    Route::get('/consultor/byespecialidad/{id}',   'Consultores\ConsultorController@especialidad');

?>