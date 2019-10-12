<?php


Auth::routes();

Route::get('/', 'PruebaController@index');

Route::get('vehicule/{id}', 'PruebaController@vehicule')->name('vehicule');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::resource('category', 'CategoryController');

Route::resource('predio', 'PredioController');
