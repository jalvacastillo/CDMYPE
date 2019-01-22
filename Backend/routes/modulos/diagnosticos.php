<?php 

// Diagnosticos

    Route::get('/diagnosticos',                'Diagnosticos\DiagnosticosController@index');
    Route::get('/diagnostico/{id}',            'Diagnosticos\DiagnosticosController@read');
    Route::get('/diagnosticos/buscar/{text}',  'Diagnosticos\DiagnosticosController@search');
    Route::post('/diagnostico',                'Diagnosticos\DiagnosticosController@store');
    Route::delete('/diagnostico/{id}',         'Diagnosticos\DiagnosticosController@delete');

// Preguntas

    Route::post('/diagnostico/pregunta',                'Diagnosticos\PreguntasController@store');
    Route::delete('/diagnostico/pregunta/{id}',         'Diagnosticos\PreguntasController@delete');

// Valores

    Route::post('/diagnostico/pregunta/valor',                'Diagnosticos\ValoresController@store');
    Route::delete('/diagnostico/pregunta/valor/{id}',         'Diagnosticos\ValoresController@delete');

// Categorias

    Route::get('/diagnostico/{id}/categorias',          'Diagnosticos\CategoriasController@index');
    Route::post('/diagnostico/categoria',                'Diagnosticos\CategoriasController@store');
    Route::delete('/diagnostico/categorias/{id}',        'Diagnosticos\CategoriasController@delete');
