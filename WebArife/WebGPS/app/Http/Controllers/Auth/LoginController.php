<?php

namespace webGps\Http\Controllers\Auth;

use Auth;
//use DB;
use webGps\User;
use Illuminate\Http\Request;
use webGps\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use webGps\Http\Requests\UsersFormRequest;

class LoginController extends Controller
{

  public function login(){
    $credentials = $this->validate(request(),[
      'email'=>'email|required|string',
      'password'=>'required|string'
    ]);
    if (Auth::attempt($credentials)) {
      return 'Tu sesion ha iniciado';
    }
      return back()
      ->withErrors(['email'=> trans('auth.failed')])
      ->withInput(request(['email']));
  }

}
