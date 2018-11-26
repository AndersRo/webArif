<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\Opciones;
use Illuminate\Support\Facades\Redirect;
use DB;

use webGps\Http\Request\OpcionesFormRequest;

class OpcionesController extends Controller
{
    public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $opciones=DB::table('opciones')->where('Idparent','LIKE','%'.$query.'%')
    ->where('FlgEli','=','0')
    ->orderBy('IdOpciones','desc')
    ->paginate(7);
    return view ('opciones.index',["opciones"=>$opciones,"searchText"=>$query]);
  }
}
public function create(){
  return view("opciones.create");
}
public function store(OpcionesFormRequest $request){
  $opciones=new opciones;
  $opciones->IdParent=$request->get('IdParent');
  $opciones->Nombre=$request->get('Nombre');
  $opciones->Ruta=$request->get('Ruta');
  $opciones->Icono=$request->get('Icono');
  $opciones->save();
  return Redirect::to('opciones');
}
public function show($id){
  return view("opciones.show", ["opciones"=>opciones::findOrFail($id)]);
}
public function edit($id){
  return view("opciones.edit", ["opciones"=>opciones::findOrFail($id)]);
}
public function update(OpcionesFormRequest $request,$id){
  $opciones=Opciones::findOrFail($id);
  $opciones->IdParent=$request->get('IdParent')
  $opciones->Nombre=$request->get('Nombre');
  $opciones->Ruta=$request->get('Ruta');
  $opciones->Icono=$request->get('Icono');
  $opciones->update();
  return Redirect::to('opciones');
}
public function destroy($id){
  $opciones=Opciones::findOrFail($id);
  $opciones->FlgEli='1';
  $opciones->update();
  return Redirect::to('opciones');
  }
}
