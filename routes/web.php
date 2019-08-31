<?php

Route::get('/','PruebaController@index');

Route::get('vehicule/{id}','PruebaController@vehicule')->name('vehicule');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('cabezal','CabezalController');

Route::resource('prueba','PruebaController');

Route::resource('agent','AgentController');