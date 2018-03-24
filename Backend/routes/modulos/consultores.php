<?php 

    Route::get('/consultores',         	'Consultores\ConsultorController@index');
    Route::post('/consultor',         	'Consultores\ConsultorController@store');
    Route::get('/consultor/{id}',     	'Consultores\ConsultorController@read');
    Route::delete('/consultor/{id}',  	'Consultores\ConsultorController@delete');

    Route::get('/consultores/buscar/{txt}',  	'Consultores\ConsultorController@search');
	Route::get('/consultor/historial/{id}',  		'Consultores\ConsultorController@historial');

	Route::get('/consultor/especialidades', 	'Consultores\EspecialidadController@index');
    Route::post('/consultor/especialidad',         	'Consultores\EspecialidadController@store');
    Route::get('/consultor/especialidad/{id}',     	'Consultores\EspecialidadController@read');
    Route::delete('/consultor/especialidad/{id}',  	'Consultores\EspecialidadController@delete');

?>
