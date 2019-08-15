<?php

Route::get('/', function () {
    return view('Front-end.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoryController');

Route::resource('cabezal','CabezalController');