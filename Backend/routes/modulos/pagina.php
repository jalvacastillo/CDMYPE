<?php 


    Route::get('/noticias',         		'Pagina\NoticiasController@index');
    Route::post('/noticia',                 'Pagina\NoticiasController@store');
    Route::get('/noticia/{id}',             'Pagina\NoticiasController@read');
    Route::delete('/noticia/{id}',          'Pagina\NoticiasController@delete');
    Route::get('/noticias/buscar/{text}',	'Pagina\NoticiasController@search');
    
    Route::get('/resultados',               'Pagina\ResultadoController@index');
    Route::post('/resultado',               'Pagina\ResultadoController@store');
    Route::get('/resultado/{id}',           'Pagina\ResultadoController@read');
    Route::delete('/resultado/{id}',        'Pagina\ResultadoController@delete');

    Route::get('/testimonios',               'Pagina\TestimonioController@index');
    Route::post('/testimonio',               'Pagina\TestimonioController@store');
    Route::get('/testimonio/{id}',           'Pagina\TestimonioController@read');
    Route::delete('/testimonio/{id}',        'Pagina\TestimonioController@delete');

    Route::get('/equipos',               'Pagina\EquipoController@index');
    Route::post('/equipo',               'Pagina\EquipoController@store');
    Route::get('/equipo/{id}',           'Pagina\EquipoController@read');
    Route::delete('/equipo/{id}',        'Pagina\EquipoController@delete');

?>