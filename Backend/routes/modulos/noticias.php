<?php 


    Route::get('/noticias',         		'NoticiaController@index');
    Route::post('/noticia',                 'NoticiaController@store');
    Route::get('/noticia/{id}',             'NoticiaController@read');
    Route::delete('/noticia/{id}',          'NoticiaController@delete');
    Route::get('/noticias/buscar/{text}',	'NoticiaController@search');


?>