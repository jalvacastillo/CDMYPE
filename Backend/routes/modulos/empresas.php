<?php 

    Route::get('empresas',         		   'Empresas\EmpresasController@index');
	Route::get('empresa/{id}',     		   'Empresas\EmpresasController@read');
    Route::get('empresas/buscar/{txt}',    'Empresas\EmpresasController@search');
    Route::post('empresa',                 'Empresas\EmpresasController@store');
	Route::delete('empresa/{id}',  		   'Empresas\EmpresasController@delete');

    Route::post('empresa/producto',        'Empresas\ProductoController@store');
    Route::delete('empresa/producto/{id}', 'Empresas\ProductoController@delete');

    Route::post('empresa/empresario',        'Empresas\EmpresaEmpresariosController@store');
	Route::delete('empresa/empresario/{id}', 'Empresas\EmpresaEmpresariosController@delete');


	Route::get('/empresarios',     	       'Empresas\EmpresariosController@index');
    Route::post('/empresario',             'Empresas\EmpresariosController@store');
	Route::get('/empresario/{id}',         'Empresas\EmpresariosController@read');
	Route::delete('/empresario/{id}',      'Empresas\EmpresariosController@delete');

	Route::get('/empresas/buscar/{txt}',  		'Empresas\ClienteController@search');
	Route::get('/empresa/historial/{id}',  		'Empresas\ClienteController@historial');
    Route::post('/empresa-logo',  			'Empresas\ClienteController@logo');

?>
