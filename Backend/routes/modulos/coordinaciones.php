<?php 

    Route::get('coordinaciones',                    'Coordinaciones\CoordinacionesController@index');
    Route::get('coordinaciones/info/{id}',          'Coordinaciones\CoordinacionesController@read');
    Route::get('coordinaciones/buscar/{txt}',       'Coordinaciones\CoordinacionesController@search');
    Route::post('/coordinacion',                    'Coordinaciones\CoordinacionesController@store');
    Route::delete('coordinacion/{id}',              'Coordinaciones\CoordinacionesController@delete');
 
?>
