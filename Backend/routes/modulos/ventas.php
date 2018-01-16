<?php 

// Ventas

    Route::get('/ventas',         		'VentasController@index');
    Route::post('/venta',         		'VentasController@store');
    Route::get('/venta/{id}',     		'VentasController@read');
    Route::delete('/venta/{id}',  		'VentasController@delete');

?>
