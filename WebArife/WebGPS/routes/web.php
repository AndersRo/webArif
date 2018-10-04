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

Route::resource('datos/cliente','ClienteController');
Route::resource('Dispositivos/dispositivo','DispositivosController');
Route::resource('Dispositivos/marca','MarcaController');
Route::resource('Dispositivos/modelo','ModeloController');
Route::resource('Dispositivos/comandos','ComandosController');
Route::resource('datos/actor','ActorController');
Route::resource('datos/empresa','EmpresaController');
Route::resource('datos/mecanico','MecanicoController');
Route::resource('datos/taller','TallerController');
Route::resource('datos/vehiculo','VehiculoController');
Route::resource('tablas/tablas','TablasController');
Route::resource('tablas/tablas_detalle','Tablas_DetalleController');
Route::resource('documentos/contrato','ContratoController');
Route::resource('documentos/contrato_anexo','Contrato_AnexoController');
Route::resource('documentos/contrato_ordenes','Contrato_OrdenesController');
Route::resource('documentos/ordentrabajo','OrdenTrabajoController');
Route::resource('documentos/ordentrabajo_detalle','OrdenTrabajo_DetalleController');
Route::resource('plataforma/AccesoPlataformaComandos','AccesoPlataformaComandosController');
Route::resource('plataforma/AccesoPlataformaDetalle','AccesoPlataformaDetalleController');
Route::resource('plataforma/AccesosPlataforma','AccesosPlataformaController');

//Route::resource('seguridad/usuario','UsuarioController');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
