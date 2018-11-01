<?php

namespace webGps\Http\Controllers\Auth;

use Auth;
//use DB;
use webGps\User;
use webGps\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function login(){
    $credentials = $this->validate(request(), [
      $this->username()=>'username|string',
      'password'=>'required|string'
    ]);
    if (Auth::attempt($credentials)) {
      return 'Tu sesion ha iniciado correctamente';
    }
    return back()
      ->withErrors([$this->username() => trans('auth.failed')])
      ->withInput(request([$this->username()]));
    }

    public function username()
    {
        return 'username';
    }

}
