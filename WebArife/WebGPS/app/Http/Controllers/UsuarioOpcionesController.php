<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;

use webGps\User;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\UsuarioOpcionesFormRequest;
use DB;


class UsuarioOpcionesController extends Controller
{
     public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $usuarios=DB::table('usuarioopciones')->where('login','LIKE','%',.$query."%")
    ->orderBy('id','desc')
    ->paginate(7);
    return view('seguridad.usuario.index',["usuarioopciones"=>$usuarioopciones,"searchText"=>$query]);
  }
}
public function create(){
  return view("seguridad.usuario.create");
}
public function store(usuarioopcionesFormRequest $request){
  $usuarioopciones=new usuarioopciones;
  $usuarioopciones->login=$request->get('IdOpciones');
  $usuarioopciones->password=bcrypt($request->get('Id'));

  $usuario->save();
  return Redirect::to('seguridad/usuario');
}
public function edit($id){
  return view("seguridad.usuario.edit",["usuario"=>User::findOrFail($id)]);
}
public function update(UsuarioFormRequest $request, $id){
  $usuarioopciones=usuarioopciones::findOrFail($id);

  $usuarioopciones->login=$request->get('IdOpciones');
  $usuarioopciones->password=bcrypt($request->get('Id'));


  $usuarioopciones->update();
  return Redirect::to('seguridad/usuario');
}
public function destroy($id){
  $usuarioopciones = DB::table('usuarioopciones')->where('id','=',$id)->delete();
  return Redirect::to('seguridad/usuarios');
}

}
