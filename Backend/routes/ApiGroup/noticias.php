<?php 

// Noticias

    Route::get('/noticias',         'NoticiaController@index');
    Route::post('/noticia',         'NoticiaController@store');
    Route::get('/noticia/{id}',     'NoticiaController@read');
    Route::delete('/noticia/{id}',  'NoticiaController@delete');


?>