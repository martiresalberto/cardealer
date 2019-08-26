<?php

Route::resource('/','PruebaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('cabezal','CabezalController');

Route::resource('prueba','PruebaController');
