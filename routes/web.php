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

Route::get('/', 'PrincipalController@inicio')->name('index');
Route::get('principalAdmin', 'PrincipalController@inicioAdmin')->name('principal.incio');

Route::get('login', 'UsuarioController@login')->name('usuarios.login');
Route::post('logear', 'UsuarioController@logear')->name('usuarios.logear');
Route::get('logout', 'UsuarioController@logout')->name('usuarios.logout');
Route::resource('usuarios', 'UsuarioController');
Route::get('usuario_crear', function(){
	return view('usuarios.create');
});

Route::resource('libros', 'LibroController');

Route::resource('tareas', 'TareaController');

Route::resource('funciones', 'FuncionController');

Route::resource('roles', 'RolController');

//Route::get('usuarioTarea', 'UsuarioTareaController');
//Route::get('tareaRol', 'TareaRolController');

Route::get('libro_crear', function(){
	return view('libros.create');
});


