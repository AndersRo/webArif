<?php

namespace webGps\Http\Controllers;
use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Modelo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ModeloFormRequest;
use DB;
class ModeloController extends Controller
{
    public function__construct(){

}

}
  if ($request) {
    $query=trim($request->get('searchText'));
  $dispositivo=DB::table('dispositivo')->where('IMEI','LIKE','%'.$query.'%')
  ->where ('FlgEli','=','1')
  ->orderBy('IdDispositivo','desc')
  ->paginate(7);
  return view ('dispositivo.index',["dispositivo"=>$dispositivo,"searchText"=>$query]);
}

public function create(){
  return view("modelo.create");
}
public function store(ModeloFormRequest $request){
  
  $modelo=new modelo;
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchCrea=$request->get('FchCrea');
  $modelo->UsrCrea=$request->get('idModelo');
  $modelo->WksCrea=$request->get('NroSim');
  $modelo->FchMod=$request->get('NroIDN');
  $modelo->WksMod=$request->get('idEmpresa');
  $modelo->FlgEli-$request->get('FlgEli');
  $modelo->FotoReferencial->get('FotoReferencial');
  $modelo->idMarca->get('idMarca');
  return Redirect::to('modelo');
}
public function show($id){
  return view("modelo.show", ["modelo"=>"modelo"::findOrFail($id)]);
}
public function edit($id){
  return view("modelo.edit", ["modelo"=>modelo::findOrFaimodelo
public function update(modeloFormRequest $request,$id){
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchCrea=$request->get('FchCrea');
  $modelo->UsrCrea=$request->get('idModelo');
  $modelo->WksCrea=$request->get('NroSim');
  $modelo->FchMod=$request->get('NroIDN');
  $modelo->WksMod=$request->get('idEmpresa');
  $modelo->FlgEli-$request->get('FlgEli');
  $modelo->FotoReferencial->get('FotoReferencial');
  $modelo->idMarca->get('idMarca');
  $modelo->update();
  return Redirect::to('modelo');
}
public function destroy($id){
$modelo=modelo::findOrFail($id);
$modelo->FlgEli='0';
$modelo->update();
return Redirect::to('modelo');
 }
}