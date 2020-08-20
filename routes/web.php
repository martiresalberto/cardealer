<?php

// Rutas de la pagina usuarios

Route::get('/', 'InicioController@index');

Route::get('cabezal/{id}', [
    'as' => 'detalle-cabezal',
    'uses' => 'InicioController@show'
]);

Route::get('cabezales', [
    'as' => 'cabezales',
    'uses' => 'InicioController@cabezales'
]);

Route::get('mensaje', [
    'as' => 'mensaje',
    'uses' => 'MensajeController@index'
]);

// Admin de la pagina

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UsersController');

Route::get('/profile','ProfileController@index');

Route::resource('/mensajes', 'MensajesController');

Route::resource('category', 'CategoryController');

Route::resource('condicion', 'CondicionController');

Route::resource('predio', 'PredioController');

Auth::routes();

Route::get('ejemplo', 'EjemploController@index')->name('upload.ejemplo');

Route::post('ejemplo', 'EjemploController@upload');

// App\Category::create([
//     'title' => 'Cabezal',
//     'user_id' => 1,
// ]);


// App\Condicion::create([
//     'titulo' => 'Usado',
//     'user_id' => 1,
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
