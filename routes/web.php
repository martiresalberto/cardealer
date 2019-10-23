<?php


Auth::routes();

Route::get('/', 'InicioController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::resource('category', 'CategoryController');

Route::resource('predio', 'PredioController');
