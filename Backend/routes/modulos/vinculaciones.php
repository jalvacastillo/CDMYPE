<?php 

    Route::get('vinculaciones',                'Vinculaciones\VinculacionesController@index');
    Route::get('vinculacion/{id}',             'Vinculaciones\VinculacionesController@read');
    Route::get('vinculacion/buscar/{txt}',     'Vinculaciones\VinculacionesController@search');
    Route::post('vinculacion',                 'Vinculaciones\VinculacionesController@store');
    Route::delete('vinculacion/{id}',          'Vinculaciones\VinculacionesController@delete');

?>
