<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\app\users;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\usersFormRequest;
use DB;


class UsersControllerRequest extends Controller
{
    public function __construc(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $users=DB::table('users')->where('password','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('Id','desc')
    ->paginate(7);
    return view ('users.index',["users"=>$users,"searchText"=>$query]);
  }
}
public function create(){
  return view("users.create");
}
public function store(usersFormRequest $request){

  $users=new users;
  $users->login=$request->get('login');
  $users->password=$request->get('password');
  $users->createt_at=$request->get('createt_at');
  $users->updated_at=$request->get('updated_at');
  $users->IdEmpresa=$request->get('IdEmpresa');
  $users->IdActor=$request->get('IdActor');
  $users->save;
  return Redirect::to('users');
}
public function show($id){
  return view("users.show", ["users"=>users::findOrFail($id)]);
}
public function edit($id){
  return view("users.edit", ["users"=>users::findOrFail($id)]);
}
public function update(usersFormRequest $request,$id){
  $users=users::findOrFail($id);
  $users->login=$request->get('login');
  $users->password=$request->get('password');
  $users->createt_at=$request->get('createt_at');
  $users->updated_at=$request->get('updated_at');
  $users->IdEmpresa=$request->get('IdEmpresa');
  $users->IdActor=$request->get('IdActor');
  $users->update();
  return Redirect::to('users');
}
public function destroy($id){
  $users=users::findOrFail($id);
  $users->FlgEli='0';
  $users->update();
  return Redirect::to('users');
}
}
