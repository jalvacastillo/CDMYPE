<?php 

// Termino

    Route::get('atterminos', 'At\TerminoController@index');
    Route::post('attermino', 'At\TerminoController@store');
    Route::get('attermino/{id}', 'At\TerminoController@read');
    Route::delete('attermino/{id}', 'At\TerminoController@delete');

// Consultores

    // Enviar TDR
    Route::post('atconsultores/enviartdr', 'At\ConsultorController@enviartdr');
    Route::get('atconsultores/{id}', 'At\ConsultorController@index');
    Route::post('atconsultor', 'At\ConsultorController@store');
    Route::get('atconsultor/{id}', 'At\ConsultorController@read');
    Route::delete('atconsultor/{id}', 'At\ConsultorController@delete');
    // Ofertantes
    Route::get('atconsultores/ofertantes/{id}', 'At\ConsultorController@ofertantes');
    Route::post('atconsultor/oferta', 'At\ConsultorController@oferta');
    Route::post('atconsultor/seleccionar', 'At\ConsultorController@seleccionar');

// Contrato

    Route::get('atcontratos', 'At\ContratoController@index');
    Route::post('atcontrato', 'At\ContratoController@store');
    Route::get('atcontrato/{id}', 'At\ContratoController@read');
    Route::delete('atcontrato/{id}', 'At\ContratoController@delete');

// Acta

    Route::get('atactas', 'At\ActaController@index');
    Route::post('atacta', 'At\ActaController@store');
    Route::get('atacta/{id}', 'At\ActaController@read');
    Route::delete('atacta/{id}', 'At\ActaController@delete');


?>