<?php 


    Route::get('/noticias',         		'Pagina\NoticiasController@index');
    Route::post('/noticia',                 'Pagina\NoticiasController@store');
    Route::get('/noticia/{id}',             'Pagina\NoticiasController@read');
    Route::delete('/noticia/{id}',          'Pagina\NoticiasController@delete');
    Route::get('/noticias/buscar/{text}',	'Pagina\NoticiasController@search');

    Route::get('/proyectos',         		'Pagina\ProyectoController@index');
    Route::post('/proyecto',                'Pagina\ProyectoController@store');
    Route::get('/proyecto/{id}',            'Pagina\ProyectoController@read');
    Route::delete('/proyecto/{id}',         'Pagina\ProyectoController@delete');
    Route::get('/proyectos/buscar/{text}',	'Pagina\ProyectoController@search');

    Route::get('/resultados',               'Pagina\ResultadoController@index');
    Route::post('/resultado',               'Pagina\ResultadoController@store');
    Route::get('/resultado/{id}',           'Pagina\ResultadoController@read');
    Route::delete('/resultado/{id}',        'Pagina\ResultadoController@delete');

    Route::get('/testimonios',               'Pagina\TestimonioController@index');
    Route::post('/testimonio',               'Pagina\TestimonioController@store');
    Route::get('/testimonio/{id}',           'Pagina\TestimonioController@read');
    Route::delete('/testimonio/{id}',        'Pagina\TestimonioController@delete');


?>