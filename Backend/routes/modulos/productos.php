<?php 

// Hemograma

    Route::get('/productos',         		'ProductosController@index');
    Route::get('/productos/buscar/{text}',	'ProductosController@search');
    Route::post('/producto',         		'ProductosController@store');
    Route::get('/producto/{id}',     		'ProductosController@read');
    Route::delete('/producto/{id}',  		'ProductosController@delete');
    Route::get('/productos/gasolina',  		'ProductosController@gasolina');

    Route::get('/producto/cardex/{id}',  	'ProductosController@cardex');


?>