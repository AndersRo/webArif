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
  $comandos=new Comandos;
  $comandos->IdComandos=$request->get('IdComandos');
  $comandos->CodTipoComandos=$request->get('CodTipoComandos');
  $comandos->Comandos=$request->get('Comandos');
  $comandos->IdModelo=$request->get('IdModelo');
  $comandos->save();
  return Redirect::to('Dispositivos/comandos');
}
public function show($id){
  return view("Dispositivos/comandos.show", ["comandos"=>Comandos::findOrFail($id)]);
}
public function edit($id){

    return view("Dispositivos/comandos.edit", ["comandos"=>Comandos::findOrFail($id)]);
}
public function update(ComandosFormRequest $request,$id){
  $comandos=Comandos::findOrFail($id);
  $comandos->IdComandos=$request->get('IdComandos');
  $comandos->CodTipoComandos=$request->get('CodTipoComandos');
  $comandos->Comandos=$request->get('Comandos');
  $comandos->IdModelo=$request->get('IdModelo');
  $comandos->update();
  return Redirect::to('Dispositivos/comandos');
}
public function destroy($id){
  $comandos=Comandos::findOrFail($id);
  $comandos->FlgEli='1';
  $comandos->update();
  return Redirect::to('Dispositivos/comandos');
 }
}
