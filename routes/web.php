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

/*Route::get('/', function () {
    return view('index');
});

Route::get('usuario/login', function(){
	return view('usuarios.login');
});

Route::get('principal', function(){
	return view('plantillas.menu');

});

Route::get('principal/menu', function(){
	return view('plantillas.inicio');
});*/

Route::get('/', 'PrincipalController@inicio')->name('index');

Route::get('login', 'UsuarioController@login')->name('usuarios.login');
Route::post('logear', 'UsuarioController@logear')->name('usuarios.logear');
Route::get('logear/inicio', 'PrincipalController@inicioAdmin')->name('plantillas.inicio');
Route::get('logout', 'UsuarioController@logout')->name('usuarios.logout');
Route::get('usuarios/inicio', 'PrincipalController@inicioAdmin')->name('plantillas.inicio');

Route::resource('usuarios', 'UsuarioController');

//Route::get('login/principalAdmin', 'UsuarioController@index')->name('usuarios.inicio');

Route::get('usuario_crear', function(){
	return view('usuarios.create');
});



