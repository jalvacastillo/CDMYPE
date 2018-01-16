<?php 

    Route::get('/compras',         		'ComprasController@index');
    Route::post('/compra',         		'ComprasController@store');
    Route::get('/compra/{id}',     		'ComprasController@read');
    Route::delete('/compra/{id}',  		'ComprasController@delete');

?>