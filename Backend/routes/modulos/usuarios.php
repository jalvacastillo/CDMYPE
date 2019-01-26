<?php 

// Usuarios

    Route::get('/usuarios',                 'Pagina\UsuariosController@index');
    Route::get('/usuarios/buscar/{text}',   'Pagina\UsuariosController@search');
    Route::post('/usuario',                 'Pagina\UsuariosController@store');
    Route::get('/usuario/{id}',             'Pagina\UsuariosController@read');
    Route::delete('/usuario/{id}',          'Pagina\UsuariosController@delete');
    Route::post('/usuario-avatar',          'Pagina\UsuariosController@avatar');

// Usuarios

    Route::get('/equipos',         		'Pagina\EquipoController@index');
    Route::get('/equipos/buscar/{text}','Pagina\EquipoController@search');
    Route::post('/equipo',         		'Pagina\EquipoController@store');
    Route::get('/equipo/{id}',     		'Pagina\EquipoController@read');
    Route::delete('/equipo/{id}',  		'Pagina\EquipoController@delete');
    Route::post('/equipo-avatar',  		'Pagina\EquipoController@avatar');

?>