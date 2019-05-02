<?php 

// Salidas

    Route::get('/salidas',         		'Salidas\SalidasController@index');
    Route::get('/salidas/buscar/{text}',	'Salidas\SalidasController@search');
    Route::post('/salida',         		'Salidas\SalidasController@store');
    Route::get('/salida/{id}',     		'Salidas\SalidasController@read');
    Route::delete('/salida/{id}',  		'Salidas\SalidasController@delete');

?>