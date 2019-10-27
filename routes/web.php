<?php

// App\User::create([
//     'name' => 'berto orozco',
//     'email' => 'beto@gmail.com',
//     'password' => bcrypt('12345678'),
// ]);

Auth::routes();

Route::get('/', 'InicioController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::resource('category', 'CategoryController');

Route::resource('predio', 'PredioController');
