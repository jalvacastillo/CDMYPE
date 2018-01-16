<?php 

// Dash

	Route::get('/dash/today',   'DashController@today');
	Route::get('/dash/month',   'DashController@month');
	Route::get('/dash/year',    'DashController@year');
	Route::get('/dash/all',    	'DashController@all');