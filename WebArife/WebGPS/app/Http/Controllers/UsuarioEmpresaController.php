<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioEmpresaController extends Controller
{
    public function __construc(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $usuarioempresa=DB::table('usuarioempresa')->where('Id','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdUsuarioEmpresa','desc')
    ->paginate(7);
    return view ('usuarioempresa.index',["usuarioempresa"=>$usuarioempresa,"searchText"=>$query]);
  }
}
public function create(){
  return view("IdUsuarioEmpresa.create");
}
public function store(ClienteFormRequest $request){
  $usuarioempresa=new usuarioempresa;
  $usuarioempresa->Id=$request->get('Id');

  $usuarioempresa->save;
  return Redirect::to('usuarioempresa');
}
public function show($id){
  return view("usuarioempresa.show", ["usuarioempresa"=>usuarioempresa::findOrFail($id)]);
}
public function edit($id){
  return view("usuarioempresa.edit", ["usuarioempresa"=>usuarioempresa::findOrFail($id)]);
}
public function update(ClienteFormRequest $request,$id){
  $usuarioempresa=usuarioempresa::findOrFail($id);
  $usuarioempresa->Id=$request->get('Id');

  $usuarioempresa->update();
  return Redirect::to('usuarioempresa');
}
public function destroy($id){
  $usuarioempresa=UsuarioEmpresa::findOrFail($id);
  $usuarioempresa->FlgEli='0';
  $usuarioempresa->update();
  return Redirect::to('usuarioempresa');
  }
}
