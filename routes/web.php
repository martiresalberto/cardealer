<?php
// Rutas de la pagin de inicio o home

Route::get('/', 'InicioController@index')->name('inicio.index');

//Rutas pagina detalle de cabezales reciente ingreso  Inicio
Route::get('/cabezal/{id}','InicioController@cabezal')->name('detalle-cabezal');

//Rutas pagina detalle de furgoness reciente ingreso  Inicio
Route::get('/furgon/{id}','InicioController@furgon')->name('detalle-furgon');

//Rutas pagina detalle de furgoness reciente ingreso  Inicio
Route::get('/carro/{id}','InicioController@carro')->name('detalle-carro');



//Ruta contactanos para enviar mensajes
Route::get('/mensaje','MensajeController@index')->name('mensaje');

//Ruta para enviar mensajes
Route::get('/enviarmensaje','MensajeController@store')->name('enviarmensaje');

//Ruta para mostrar los mensajes en el admin

Route::get('/mostrarmensajeadmin','MensajesController@mostrarmensajeadmin')->name('mostrarmensajeadmin');

//Ruta para mostrar los mensajes en el admin show
Route::get('/mensajes/{id}','MensajesController@show')->name('admin.mensajes.show');

//Ruta para mostrar las notifiaciones leidas
Route::get('/notifications/{id}','NotificationsController@read')->name('notifications.read');

//Ruta para elimianr notificaciones
Route::get('/notifications/{id}','NotificationsController@destroy')->name('notifications.destroy');



//Ruta para mostrar todos cabezales publucados
Route::get('/adminprediocabezales', 'HomeAdminController@cabezales')->name('adminprediocabezales');

//Ruta para mostrar todos furgones publucados
Route::get('/adminprediofurgones','HomeAdminController@furgones')->name('adminprediofurgones');

//Ruta para mostrar todos los carros
Route::get('/adminprediocarros','HomeAdminController@carros')->name('adminprediocarros');



// Rutas para el Admin de la pagina
Route::group(['middleware' => ['auth','roles:admin']], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/category', 'CategoryController');

    Route::resource('/condicion', 'CondicionController');

    Route::resource('/predio', 'PredioController');

    //Ruta para editar mi perfil
    Route::get('/users', 'Userscontroller@index');

});

    Route::resource('/miperfil','MiperfilController');

Auth::routes();

Route::get('/ejemplo', 'EjemploController@index')->name('upload.ejemplo');

Route::post('/ejemplo', 'EjemploController@upload');

