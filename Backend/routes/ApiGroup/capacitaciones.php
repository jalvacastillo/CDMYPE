<?php 

// Termino

    Route::get('capterminos', 'Cap\TerminoController@index');
    Route::post('captermino', 'Cap\TerminoController@store');
    Route::get('captermino/{id}', 'Cap\TerminoController@read');
    Route::delete('captermino/{id}', 'Cap\TerminoController@delete');

// // Consultores

//     // Enviar TDR
//     Route::post('atconsultores/enviartdr', 'Cap\ConsultorController@enviartdr');
//     Route::get('atconsultores/{id}', 'Cap\ConsultorController@index');
//     Route::post('atconsultor', 'Cap\ConsultorController@store');
//     Route::get('atconsultor/{id}', 'Cap\ConsultorController@read');
//     Route::delete('atconsultor/{id}', 'Cap\ConsultorController@delete');
//     // Ofertantes
//     Route::get('atconsultores/ofertantes/{id}', 'Cap\ConsultorController@ofertantes');
//     Route::post('atconsultor/oferta', 'Cap\ConsultorController@oferta');
//     Route::post('atconsultor/seleccionar', 'Cap\ConsultorController@seleccionar');

// // Contrato

//     Route::get('atcontratos', 'Cap\ContratoController@index');
//     Route::post('atcontrato', 'Cap\ContratoController@store');
//     Route::get('atcontrato/{id}', 'Cap\ContratoController@read');
//     Route::delete('atcontrato/{id}', 'Cap\ContratoController@delete');

// // Acta

//     Route::get('atactas', 'Cap\ActaController@index');
//     Route::post('atacta', 'Cap\ActaController@store');
//     Route::get('atacta/{id}', 'Cap\ActaController@read');
//     Route::delete('atacta/{id}', 'Cap\ActaController@delete');


?>