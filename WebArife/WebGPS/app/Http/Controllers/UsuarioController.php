<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;

use webGps\User;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\UsuarioFormRequest;
use DB;

class UsuarioController extends Controller
{
  public function __construct(){
  
  }
  public function index(Request $request){
    if ($request) {
      $query=trim($request->get('searchText'));
      $usuarios=DB::table('users')->where('login','LIKE','%',.$query."%")
      ->orderBy('id','desc')
      ->paginate(7);
      return view('seguridad.usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);
    }
  }
  public function create(){
    return view("seguridad.usuario.create");
  }
  public function store(UsuarioFormRequest $request){
    $usuario=new user;
    $usuario->login=$request->get('login');
    $usuario->password=bcrypt($request->get('password'));
    $usuario->createt_at=$request->('createt_at');
    $usuario->updated_at=$request->('updated_at');
    $usuario->IdEmpresa=$request->('IdEmpresa');
    $usuario->IdActor=$request->('IdActor');
    $usuario->save();
    return Redirect::to('seguridad/usuario');
  }
  public function edit($id){
    return view("seguridad.usuario.edit",["usuario"=>User::findOrFail($id)]);
  }
  public function update(UsuarioFormRequest $request, $id){
    $usuario=User::findOrFail($id);
    $usuario->login=$request->get('login');
    $usuario->password=bcrypt($request->get('password'));
    $usuario->createt_at=$request->('createt_at');
    $usuario->updated_at=$request->('updated_at');
    $usuario->IdEmpresa=$request->('IdEmpresa');
    $usuario->IdActor=$request->('IdActor');
    $usuario->update();
    return Redirect::to('seguridad/usuario');
  }
  public function destroy($id){
    $usuario = DB::table('users')->where('id','=',$id)->delete();
    return Redirect::to('seguridad/usuarios');
  }

}
