<?php


Route::get('/', function(){
	return view('welcome');
});

Route::resource('cliente','ClienteController');
Route::resource('seguridad/usuario','UsuarioController');
