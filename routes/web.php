<?php

Route::get('/', 'InicioController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::resource('category', 'CategoryController');

Route::resource('condicion', 'CondicionController');

Route::resource('predio', 'PredioController');

Auth::routes();


// App\Category::create([
//     'titulo' => 'Cabezal',
// ]);


// App\Condicion::create([
//     'titulo' => 'Usado',
// ]);

// App\Role::create([
//     'name' => 'admin',
//     'display_name' => 'admin',
//     'description' => 'admin',
// ]);

// App\User::create([
//     'name' => 'Beto',
//     'email' => 'beto@gmail.com',
//     'password' => bcrypt('123456'),
//     'role_id' => 1,
// ]);
