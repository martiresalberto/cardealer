<?php

// Rutas de la pagin de inicio

Route::get('/', 'InicioController@index');

//Ruta pára mostrar los cabezales recietne ingreso

Route::get('cabezales', [
    'as' => 'cabezales',
    'uses' => 'InicioController@cabezales'
]);

//Rutas de detalle de cabezales reciente ingreso

Route::get('cabezal/{id}', [
    'as' => 'detalle-cabezal',
    'uses' => 'InicioController@show'
]);

//Ruta contactanos para enviar mensajes 

Route::get('mensaje', [
    'as' => 'mensaje',
    'uses' => 'MensajeController@index'
]);

//Ruta para enviar mensajes

Route::post('enviarmensaje', [
    'as' => 'enviarmensaje',
    'uses' => 'MensajeController@store'
]);


Route::get('mostrarmensajeadmin', 
    'MensajesController@mostrarmensajeadmin'
);

Route::get('mensajes/{id}', [
    'as' => 'admin.mensajes.show',
    'uses' => 'MensajesController@show'
]);

Route::patch('notifications/{id}', [
    'as' => 'notifications.read',
    'uses' => 'MensajesController@read'
]);

Route::delete('notifications/{id}', [
    'as' => 'notifications.destroy',
    'uses' => 'MensajesController@destroy'
]);



//Ruta para editar mi perfil

Route::get('users', 'Userscontroller@index');

// Admin de la pagina

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('category', 'CategoryController');

Route::resource('condicion', 'CondicionController');

Route::resource('predio', 'PredioController');

Route::resource('miperfil','MiperfilController');

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
//     'name' => 'vendedor',
//     'display_name' => 'vendedor',
//     'description' => 'vendedor',
// ]);

// App\User::create([
//     'name' => 'Beto',
//     'email' => 'beto@gmail.com',
//     'password' => bcrypt('123456'),
//     'role_id' => 1,
// ]);

// App\User::create([
//     'name' => 'Irene Alburez',
//     'email' => 'irene@gmail.com',
//     'password' => bcrypt('123456'),
//     'role_id' => 2,
// ]);

