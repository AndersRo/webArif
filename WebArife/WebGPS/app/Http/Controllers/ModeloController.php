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
    public function __construct(){

    }
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $modelo=DB::table('modelo')->where('Descripcion','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('IdModelo','desc')
    ->paginate(7);
    return view ('Dispositivos/modelo.index',["modelo"=>$modelo,"searchText"=>$query]);
}
}
public function create(){
  return view("Dispositivos/modelo.create");
}
public function store(ModeloFormRequest $request){
  $modelo=new modelo;
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchCrea=$request->get('FchCrea');
  $modelo->UsrCrea=$request->get('UsrCrea');
  $modelo->WksCrea=$request->get('WksCrea');
  $modelo->FchMod=$request->get('FchMod');
  $modelo->UsrMod=$request->get('UsrMod');
  $modelo->WksMod=$request->get('WksMod');
  $modelo->FlgEli=$request->get('FlgEli');
  $modelo->FotoReferencial=$request->get('FotoReferencial');
  $modelo->IdMarca=$request->get('IdMarca');
  $modelo->save();
  return Redirect::to('Dispositivos/modelo');
}
public function show($id){
  return view("Dispositivos/modelo.show", ["modelo"=>modelo::findOrFail($id)]);
}
public function edit($id){
  return view("Dispositivos/modelo.edit", ["modelo"=>modelo::findOrFail($id)]);
}
public function update(ModeloFormRequest $request,$id){
  $modelo=modelo::findOrFail($id);
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchCrea=$request->get('FchCrea');
  $modelo->UsrCrea=$request->get('UsrCrea');
  $modelo->WksCrea=$request->get('WksCrea');
  $modelo->FchMod=$request->get('FchMod');
  $modelo->UsrMod=$request->get('UsrMod');
  $modelo->WksMod=$request->get('WksMod');
  $modelo->FlgEli=$request->get('FlgEli');
  $modelo->FotoReferencial=$request->get('FotoReferencial');
  $modelo->IdMarca=$request->get('IdMarca');
  $modelo->update();
  return Redirect::to('Dispositivos/modelo');
}
public function destroy($id){
$modelo=modelo::findOrFail($id);
$modelo->FlgEli='0';
$modelo->update();
return Redirect::to('Dispositivos/modelo');
 }
}
