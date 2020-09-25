<?php

// Rutas de la pagin de inicio o home


Route::get('/', 'InicioController@index');

//Rutas pagina detalle de cabezales reciente ingreso  Inicio

Route::get('cabezal/{id}', [
    'as' => 'detalle-cabezal-inicio',
    'uses' => 'InicioController@show'
]);


//Ruta pára mostrar Pagina de inicio de los cabezales recietne ingreso

Route::get('cabezales-reciente-ingreso', [
    'as' => 'cabezales-reciente-ingreso',
    'uses' => 'CabezalesController@cabezales'
]);

//Ruta para mostrar la pagina de detalle cabezales reciente ingreso

Route::get('cabezalesshow/{id}', [
    'as' => 'detalle-cabezal-reciente-ingreso',
    'uses' => 'CabezalesController@cabezalesshow'
]);


//Ruta para mostrar los furgones en el nav de la pagina de inicio

Route::get('furgones-reciente-ingreso',[
    'as' => 'furgones-reciente-ingreso',
    'uses' => 'FurgonesController@furgones'
]);


//Ruta para mostrar los carrs en el nav de la pagina de inicio

Route::get('carros-reciente-ingreso',[
    'as' => 'carros-reciente-ingreso',
    'uses' => 'CarrosController@carros'
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

//Ruta para mostrar los mensajes en el admin

Route::get('mostrarmensajeadmin', 
    'MensajesController@mostrarmensajeadmin'
);

//Ruta para mostrar los mensajes en el admin show 

Route::get('mensajes/{id}', [
    'as' => 'admin.mensajes.show',
    'uses' => 'MensajesController@show'
]);

//Ruta para mostrar las notifiaciones leidas

Route::patch('notifications/{id}', [
    'as' => 'notifications.read',
    'uses' => 'MensajesController@read'
]);

//Ruta para elimianr notificaciones

Route::delete('notifications/{id}', [
    'as' => 'notifications.destroy',
    'uses' => 'MensajesController@destroy'
]);

//Ruta para mostrar las notificaciones al usuario en el front

Route::get('verNotificacionesUsuario', [
    'as' => 'verNotificaciones.verNotificaciones',
    'uses' => 'InicioController@verNotificacionesUsuario'
]);

//Ruta para editar mi perfil

Route::get('users', 'Userscontroller@index');

//Ruta para mostrar todos cabezales publucados

Route::get('adminprediocabezales', 'HomeAdminController@cabezales')->name('adminprediocabezales');

//Ruta para mostrar todos furgones publucados

Route::get('adminprediofurgones', [
    'as' => 'adminprediofurgones',
    'uses' => 'HomeAdminController@furgones'
]);

//Ruta para mostrar todos los carros

Route::get('adminprediocarros', [
    'as' => 'adminprediocarros',
    'uses' => 'HomeAdminController@furgones'
]);

// Rutas para el Admin de la pagina

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('condicion', 'CondicionController');

Route::resource('predio', 'PredioController');

Route::resource('miperfil','MiperfilController');

Auth::routes();

Route::get('ejemplo', 'EjemploController@index')->name('upload.ejemplo');

Route::post('ejemplo', 'EjemploController@upload');


// App\Category::create([
//     'title' => 'Cabezales',
//     'user_id' => 1,
// ]);

// App\Category::create([
//     'title' => 'Furgones',
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

// App\Role::create([
//     'name' => 'visitante',
//     'display_name' => 'visitante',
//     'description' => 'visitante',
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

