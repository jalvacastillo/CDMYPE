<?php 

// Heces

    Route::get('/heces',         		'Analisis\HecesController@index');
    Route::get('/heces/buscar/{text}',	'Analisis\HecesController@search');
    Route::post('/heces',         		'Analisis\HecesController@store');
    Route::get('/hece/{id}',     		'Analisis\HecesController@read');
    Route::delete('/heces/{id}',  		'Analisis\HecesController@delete');


?>