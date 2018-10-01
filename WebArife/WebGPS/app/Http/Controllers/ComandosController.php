<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Comandos;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ComandosFormRequest;
use DB;

class ComandosController extends Controller
{
   public function __construct(){
}

public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $comandos=DB::table('comandos')->where('CodTipoComandos','LIKE','%'.$query.'%')
    ->orderBy('IdComandos','desc')
    ->paginate(7);
    return view ('Dispositivos/comandos.index',["comandos"=>$comandos,"searchText"=>$query]);
  }
}
public function create(){
  return view("Dispositivos/comandos.create");
}
public function store(ComandosFormRequest $request){
  $comandos=new comandos;
  $comandos->CodTipoComandos=$request->get('CodTipoComandos');
  $comandos->UsrCrea=$request->get('comandos');
  $comandos->WksCrea=$request->get('idModelo');

  return Redirect::to('Dispositivos/comandos');
}
public function show($id){
  return view("Dispositivos/comandos.show", ["comandos"=>"comandos"::findOrFail($id)]);
}
public function edit($id){

    return view("Dispositivos/comandos.edit", ["comandos"=>comandos::findOrFail($id)]);
}
public function update(ComandosFormRequest $request,$id){
  $comandos=comandos::findOrFail($id);
  $comandos->UsrCrea=$request->get('comandos');
  $comandos->CodTipoComandos=$request->get('CodTipoComandos');
  $comandos->WksCrea=$request->get('idModelo');
  $comandos->update();
  return Redirect::to('Dispositivos/comandos');
}
public function destroy($id){
  $comandos=comandos::findOrFail($id);
  $comandos->FlgEli='0';
  $comandos->update();
  return Redirect::to('Dispositivos/comandos');
 }
}
