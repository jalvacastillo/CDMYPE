<?php 

// Usuarios

    Route::get('/usuarios',         		'UsuarioController@index');
    Route::get('/usuarios/buscar/{text}',	'UsuarioController@search');
    Route::post('/usuario',         		'UsuarioController@store');
    Route::get('/usuario/{id}',     		'UsuarioController@read');
    Route::delete('/usuario/{id}',  		'UsuarioController@delete');
    Route::post('/usuario-avatar',  		'UsuarioController@avatar');

?>