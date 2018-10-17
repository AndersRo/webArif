<?php

namespace webGps\Http\Controllers;
use Illuminate\Http\Request;

use Carbon\carbon;
use webGps\Http\Requests;
use webGps\Modelo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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
  $modelo=new Modelo;
  $modelo->IdModelo=$request->get('IdModelo');
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchCrea=Carbon::now();
  $modelo->UsrCrea=$request->get('UsrCrea');
  $modelo->WksCrea=$request->ip();
  $modelo->FchMod=Carbon::now();
  $modelo->UsrMod=$request->get('UsrMod');
  $modelo->WksMod=$request->ip();
  $modelo->FlgEli=1;
  if (Input::hasFile('FotoReferencial')) {
    $file=Input::file('FotoReferencial');
    $file->move(public_path().'/imagenes/modelo/',$file->getClientOriginalName());
    $modelo->FotoReferencial=$file->getClientOriginalName();
  }
  $modelo->IdMarca=$request->get('IdMarca');
  $modelo->save();
  return Redirect::to('Dispositivos/modelo');
}
public function show($id){
  return view("Dispositivos/modelo.show", ["modelo"=>Modelo::findOrFail($id)]);
}
public function edit($id){
  return view("Dispositivos/modelo.edit", ["modelo"=>Modelo::findOrFail($id)]);
}
public function update(ModeloFormRequest $request,$id){
  $modelo=Modelo::findOrFail($id);
  $modelo->IdModelo=$request->get('IdModelo');
  $modelo->Descripcion=$request->get('Descripcion');
  $modelo->FchMod=Carbon::now();
  $modelo->UsrMod=$request->get('UsrMod');
  $modelo->WksMod=$request->ip();
  if (Input::hasFile('FotoReferencial')) {
    $file=Input::file('FotoReferencial');
    $file->move(public_path().'/imagenes/modelo/',$file->getClientOriginalName());
    $modelo->FotoReferencial=$file->getClientOriginalName();
  }
  $modelo->IdMarca=$request->get('IdMarca');
  $modelo->update();
  return Redirect::to('Dispositivos/modelo');
}
public function destroy($id){
$modelo=Modelo::findOrFail($id);
$modelo->FlgEli='0';
$modelo->update();
return Redirect::to('Dispositivos/modelo');
 }
}
