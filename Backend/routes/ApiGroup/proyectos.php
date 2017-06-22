<?php 

// Proyectos

    Route::get('/proyectos',         'ProyectoController@index');
    Route::post('/proyecto',         'ProyectoController@store');
    Route::get('/proyecto/{id}',     'ProyectoController@read');
    Route::delete('/proyecto/{id}',  'ProyectoController@delete');


?>