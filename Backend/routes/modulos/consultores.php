<?php 

    Route::get('/consultores',         	'Consultores\ConsultoresController@index');
    Route::get('/consultores/all',          'Consultores\ConsultoresController@all');
    Route::get('/consultores/buscar/{txt}',  	'Consultores\ConsultoresController@search');
    Route::get('/consultores/filtrar/{columna}/{valor}',     'Consultores\ConsultoresController@filter');
    Route::get('/consultor/{id}',       'Consultores\ConsultoresController@read');
    Route::post('/consultor',           'Consultores\ConsultoresController@store');
    Route::delete('/consultor/{id}',    'Consultores\ConsultoresController@delete');

	Route::get('/consultor/historial/{id}',  		'Consultores\ConsultoresController@historial');

    Route::post('/consultor/especialidad',         	'Consultores\EspecialidadesController@store');
    Route::delete('/consultor/especialidad/{id}',  	'Consultores\EspecialidadesController@delete');

?>
