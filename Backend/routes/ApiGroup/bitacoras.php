<?php 

// Bitacoras

    Route::get('/bitacoras',         'BitacoraController@index');
    Route::post('/bitacora',         'BitacoraController@store');
    Route::get('/bitacora/{id}',     'BitacoraController@read');
    Route::delete('/bitacora/{id}',  'BitacoraController@delete');

?>