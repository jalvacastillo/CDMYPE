<?php 

    Route::get('/clientes',         		'Clientes\ClienteController@index');
	Route::post('/cliente',         		'Clientes\ClienteController@store');
	Route::get('/clientes/buscar/{txt}',	'Clientes\ClienteController@search');
	Route::get('/cliente/{id}',     		'Clientes\ClienteController@read');
	Route::delete('/cliente/{id}',  		'Clientes\ClienteController@delete');

	Route::get('/empresas',     	'Clientes\EmpresaController@index');
    Route::post('/empresa',         'Clientes\EmpresaController@store');
	Route::get('/empresa/{id}',     'Clientes\EmpresaController@read');
	Route::delete('/empresa/{id}',     'Clientes\EmpresaController@delete');

	Route::get('/productos',     	'Clientes\ProductoController@index');
    Route::post('/producto',         'Clientes\ProductoController@store');
	Route::get('/producto/{id}',     'Clientes\ProductoController@read');
	Route::delete('/producto/{id}',     'Clientes\ProductoController@delete');
	Route::get('/cliente/productos/{id}',     'Clientes\ProductoController@clienteProductos');


	Route::get('/empresarios',     	'Clientes\EmpresarioController@index');
    Route::post('/empresario',         'Clientes\EmpresarioController@store');
	Route::get('/empresario/{id}',     'Clientes\EmpresarioController@read');
	Route::delete('/empresario/{id}',     'Clientes\EmpresarioController@delete');

	Route::get('/clientes/buscar/{txt}',  		'Clientes\ClienteController@search');
	Route::get('/cliente/historial/{id}',  		'Clientes\ClienteController@historial');
    Route::post('/cliente-logo',  			'Clientes\ClienteController@logo');

?>
