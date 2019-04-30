<?php 

    Route::get('/caps',              'Caps\CapsController@index');
    Route::get('/caps/buscar/{txt}',     'Caps\CapsController@search');
    Route::get('/cap/{id}',          'Caps\CapsController@read');
    Route::post('/cap',              'Caps\CapsController@store');
    Route::delete('/cap/{id}',       'Caps\CapsController@delete');
    Route::post('cap/enviar-tdr',       'Caps\CapsController@send');

    Route::get('cap/empresario/{id}',    'Caps\EmpresariosController@read');
    Route::post('cap/empresario',        'Caps\EmpresariosController@store');
    Route::delete('cap/empresario/{id}', 'Caps\EmpresariosController@delete');

    Route::get('cap/consultor/{id}',    'Caps\ConsultoresController@read');
    Route::post('cap/consultor',        'Caps\ConsultoresController@store');
    Route::delete('cap/consultor/{id}', 'Caps\ConsultoresController@delete');

    Route::get('cap/contrato/{id}',    'Caps\ContratosController@read');
    Route::post('cap/contrato',        'Caps\ContratosController@store');
    Route::delete('cap/contrato/{id}', 'Caps\ContratosController@delete');

    Route::get('cap/ampliacion/{id}',    'Caps\AmpliacionesController@read');
    Route::post('cap/ampliacion',        'Caps\AmpliacionesController@store');
    Route::delete('cap/ampliacion/{id}', 'Caps\AmpliacionesController@delete');

    Route::get('cap/acta/{id}',    'Caps\ActasController@read');
    Route::post('cap/acta',        'Caps\ActasController@store');
    Route::delete('cap/acta/{id}', 'Caps\ActasController@delete');

?>