<?php 

    Route::get('/clientes',         		'ClientesController@index');
	Route::post('/cliente',         		'ClientesController@store');
	Route::get('/cliente/{id}',     		'ClientesController@read');
	Route::delete('/cliente/{id}',  		'ClientesController@delete');

	Route::get('/clientes/buscar/{txt}',  		'ClientesController@search');
	Route::get('/cliente/ventas/{id}',  		'ClientesController@ventas');

?>
