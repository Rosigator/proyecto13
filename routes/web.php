<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios', 'UserController@index');

Route::get('usuarios/nuevo', function() {
    return 'Creando un nuevo usuario';
});

Route::get('usuarios/{id}', function($id) {
    return 'mostrando detalles del usuario: ' . $id;
})->where('id','[0-9]+');

Route::get('saludo/{name}/{nickname?}',function($name, $nickname = null){

    $saludo = 'Bienvenido ' . $name;

    return $nickname

        ? $saludo . '. Tu apodo es ' . $nickname
        : $saludo;
});


