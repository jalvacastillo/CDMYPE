<?php 

// Materiales

    Route::get('/materiales',              'Materiales\MaterialesController@index');
    Route::get('/materiales/buscar/{text}',    'Materiales\MaterialesController@search');
    Route::post('/material',              'Materiales\MaterialesController@store');
    Route::get('/material/{id}',          'Materiales\MaterialesController@read');
    Route::delete('/material/{id}',       'Materiales\MaterialesController@delete');

    Route::get('material/recurso/{id}',    'Materiales\RecursosController@read');
    Route::post('material/recurso',        'Materiales\RecursosController@store');
    Route::delete('material/recurso/{id}', 'Materiales\RecursosController@delete');

?>