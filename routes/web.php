<?php

Route::resource('/','FrontEndController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('cabezal','CabezalController');