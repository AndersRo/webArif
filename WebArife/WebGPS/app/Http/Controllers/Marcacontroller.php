<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Marca;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\MarcaFormRequest;
use DB;

class Marcacontroller extends Controller
{
public function__construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $marca=DB::table('marca')->where('Descripcion','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('idMarca','desc')
    ->paginate(7);
    return view ('marca.index',["marca"=>$marca,"searchText"=>$query]);
  }
}
public function create(){
  return view("marca.create");
}
public function store(ModeloFormRequest $request){
 
  $modelo=new marca;
  $marca->Descripcion=$request->get('Descripcion');
  $marca->UsrCrea=$request->get('UsrCrea');
  $marca->WksCrea=$request->get('WksCrea');
  $marca->FchMod=$request->get('FchMod');
  $marca->UsrMod=$request->get('UsrMod');
  $marca->WksMod=$request->get('WksMod');
  $marca->FlgEli=$request->get('FlgEli');
  $marca->FchCrea=$request->get('FchCrea');
  return Redirect::to('marca');
}
public function show($id){
  return view("marca.show", ["marca"=>"marca"::findOrFail($id)]);
}
public function edit($id){
  return view("marca.edit", ["marca"=>marca::findOrFaimarca
public function update(modeloFormRequest $request,$id){
  $marca->Descripcion=$request->get('Descripcion');
  $marca->UsrCrea=$request->get('UsrCrea');
  $marca->WksCrea=$request->get(' WksCrea');
  $marca->FchMod=$request->get('FchMod');
  $marca->UsrMod=$request->get('UsrMod');
  $marca->WksMod=$request->get('WksMod');
  $marca->FlgEli=$request->get('FlgEli');
  $marca->FchCrea=$request->get('FchCrea');
  $marca->update();
  return Redirect::to('marca');
public function destroy($id){
$marca=marca::findOrFail($id);
$marca->FlgEli='0';
$marca->update();
return Redirect::to('marca');
 }
}
