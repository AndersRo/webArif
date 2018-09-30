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

Route::resource('cliente','ClienteController');
Route::resource('Dispositivos/dispositivo','DispositivosController');
Route::resource('Dispositivos/marca','MarcaController');
Route::resource('Dispositivos/modelo','ModeloController');
Route::resource('Dispositivos/comandos','ComandosController');
Route::resource('datos/actor','ActorController');
Route::resource('datos/empresa','EmpresaController');
Route::resource('documentos/contrato','ContratoController');
Route::resource('documentos/contrato_anexo','Contrato_AnexoController');
Route::resource('documentos/contrato_ordenes','Contrato_OrdenesController');
Route::resource('plataforma/AccesoPlataformaComandos','AccesoPlataformaComandosController');
Route::resource('plataforma/AccesoPlataformaDetalle','AccesoPlataformaDetalleController');

Route::resource('seguridad/usuario','UsuarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
