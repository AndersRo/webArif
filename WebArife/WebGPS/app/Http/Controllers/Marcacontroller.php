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
public function __construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $marca=DB::table('marca')->where('Descripcion','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('IdMarca','desc')
    ->paginate(7);
    return view ('Dispositivos/marca.index',["marca"=>$marca,"searchText"=>$query]);
  }
}
public function create(){
  return view("Dispositivos/marca.create");
}
public function store(MarcaFormRequest $request){
  $marca=new marca;
  $marca->Descripcion=$request->get('Descripcion');
  $marca->UsrCrea=$request->get('UsrCrea');
  $marca->WksCrea=$request->get('WksCrea');
  $marca->FchMod=$request->get('FchMod');
  $marca->UsrMod=$request->get('UsrMod');
  $marca->WksMod=$request->get('WksMod');
  $marca->FlgEli=$1;
  $marca->FchCrea=$request->get('FchCrea');
  $marca->save();
  return Redirect::to('Dispositivos/marca');
}
public function show($id){
  return view("Dispositivos/marca.show", ["marca"=>marca::findOrFail($id)]);
}
public function edit($id){
  return view("Dispositivos/marca.edit", ["marca"=>marca::findOrFail($id)]);
}
public function update(MarcaFormRequest $request,$id){
  $marca=marca::findOrFail($id);
  $marca->Descripcion=$request->get('Descripcion');
  $marca->UsrCrea=$request->get('UsrCrea');
  $marca->WksCrea=$request->get(' WksCrea');
  $marca->FchMod=$request->get('FchMod');
  $marca->UsrMod=$request->get('UsrMod');
  $marca->WksMod=$request->get('WksMod');
  $marca->FlgEli=$request->get('FlgEli');
  $marca->FchCrea=$request->get('FchCrea');
  $marca->update();
  return Redirect::to('Dispositivos/marca');
}
public function destroy($id){
  $marca=marca::findOrFail($id);
  $marca->FlgEli='0';
  $marca->update();
  return Redirect::to('Dispositivos/marca');
 }
}
