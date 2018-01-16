<?php 

    Route::get('/proveedores',         	'ProveedoresController@index');
    Route::post('/proveedor',         	'ProveedoresController@store');
    Route::get('/proveedor/{id}',     	'ProveedoresController@read');
    Route::delete('/proveedor/{id}',  	'ProveedoresController@delete');

    Route::get('/proveedores/buscar/{txt}',  	'ProveedoresController@search');
	Route::get('/proveedor/compras/{id}',  		'ProveedoresController@compras');

?>
