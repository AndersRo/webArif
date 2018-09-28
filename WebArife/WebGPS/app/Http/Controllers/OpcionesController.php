<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
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
    ->where('FlgEli','=','1')
    ->orderBy('IdOpciones','desc')
    ->paginate(7);
    return view ('opciones.index',["opciones"=>$opciones,"searchText"=>$query]);
  }
}
public function create(){
  return view("opciones.create");
}
public function store(opcionesFormRequest $request){
  $opciones=new opciones;
  $opciones->Idparent=$request->get('Idparent');
  $opciones->Nombre=$request->get('Nombre');
  $opciones->Ruta=$request->get('Ruta');
  $opciones->Icono=$request->get('Icono');
  $opciones->save;
  return Redirect::to('opciones');
}
public function show($id){
  return view("opciones.show", ["opciones"=>opciones::findOrFail($id)]);
}
public function edit($id){
  return view("opciones.edit", ["opciones"=>opciones::findOrFail($id)]);
}
public function update(opcionesFormRequest $request,$id){
$opciones=opciones::findOrFail($id);
$opciones->Idparent=$request->get('Idparent')
$opciones->Nombre=$request->get('Nombre');
$opciones->Ruta=$request->get('Ruta');
$opciones->Icono=$request->get('Icono');
  return Redirect::to('opciones');
}
public function destroy($id){
  $opciones=Opciones::findOrFail($id);
  $opciones->FlgEli='0';
  $opciones->update();
  return Redirect::to('opciones');
  }
}
