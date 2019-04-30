<?php 

    Route::get('/ats',              'Ats\AtsController@index');
    Route::get('/ats/buscar/{txt}',     'Ats\AtsController@search');
    Route::get('/at/{id}',          'Ats\AtsController@read');
    Route::post('/at',              'Ats\AtsController@store');
    Route::delete('/at/{id}',       'Ats\AtsController@delete');
    Route::post('at/enviar-tdr',       'Ats\AtsController@send');

    Route::get('at/empresa/{id}',    'Ats\EmpresasController@read');
    Route::post('at/empresa',        'Ats\EmpresasController@store');
    Route::delete('at/empresa/{id}', 'Ats\EmpresasController@delete');

    Route::get('at/consultor/{id}',    'Ats\ConsultoresController@read');
    Route::post('at/consultor',        'Ats\ConsultoresController@store');
    Route::delete('at/consultor/{id}', 'Ats\ConsultoresController@delete');

    Route::get('at/contrato/{id}',    'Ats\ContratosController@read');
    Route::post('at/contrato',        'Ats\ContratosController@store');
    Route::delete('at/contrato/{id}', 'Ats\ContratosController@delete');

    Route::get('at/ampliacion/{id}',    'Ats\AmpliacionesController@read');
    Route::post('at/ampliacion',        'Ats\AmpliacionesController@store');
    Route::delete('at/ampliacion/{id}', 'Ats\AmpliacionesController@delete');

    Route::get('at/acta/{id}',    'Ats\ActasController@read');
    Route::post('at/acta',        'Ats\ActasController@store');
    Route::delete('at/acta/{id}', 'Ats\ActasController@delete');

?>