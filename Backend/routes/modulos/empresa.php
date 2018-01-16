<?php 

    Route::post('/empresa',         		'EmpresaController@store');
    Route::get('/empresa/{id}',     		'EmpresaController@read');

?>