<?php 

    Route::get('informes',                 'Informes\InformesController@index');
    Route::get('informe/{id}',                 'Informes\InformesController@read');
    Route::post('informe',                 'Informes\InformesController@store');

    Route::delete('informe/{id}',          'Informes\InformesController@delete');
    
    Route::get('informe/mensual/{id}',     'Informes\InformesController@InformeMensualPDF');

?>
