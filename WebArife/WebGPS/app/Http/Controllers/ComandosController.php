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
   public function__construct(){
}
public function__construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $comandos=DB::table('comandos')->where('CodTipoComandos','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('idMarca','desc')
    ->paginate(7);
    return view ('comandos.index',["comandos"=>$comandos,"searchText"=>$query]);
  }
}
public function create(){
  return view("comandos.create");
}
public function store(ModeloFormRequest $request){


  $modelo=new comandos;
  $comandos->=$request->get('CodTipoComandos');
  $comandos->UsrCrea=$request->get('comandos');
  $comandos->WksCrea=$request->get('idModelo');

  return Redirect::to('comandos');
}
public function show($id){
  return view("comandos.show", ["comandos"=>"comandos"::findOrFail($id)]);
}
public function edit($id){

    return view("comandos.edit", ["comandos"=>comandos::findOrFail($id)]);

public function update(modeloFormRequest $request,$id){
  $comandos->=$request->get('CodTipoComandos');
  $comandos->UsrCrea=$request->get('comandos');
  $comandos->WksCrea=$request->get('idModelo');
  $comandos->update();
  return Redirect::to('comandos');
public function destroy($id){
$ comandos=comandos::findOrFail($id);
$comandos->FlgEli='0';
$comandos->update();
return Redirect::to('comandos');
 }
}
