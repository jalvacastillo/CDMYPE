<?php 

// Salidas

    Route::get('/salidas',         'Salidas\SalidaController@index');
    Route::post('/salida',         'Salidas\SalidaController@store');
    Route::get('/salida/{id}',     'Salidas\SalidaController@read');
    Route::delete('/salida/{id}',  'Salidas\SalidaController@delete');

// Asesores
    Route::get('/salida/asesores/{salida}', 'Salidas\AsesorController@index');
    Route::post('/salida/asesores',           'Salidas\AsesorController@store');
    Route::get('/salida/asesor/{id}',       'Salidas\AsesorController@read');
    Route::delete('/salida/asesor/{id}',    'Salidas\AsesorController@delete');

?>