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

  public function showLoginForm(Request $request){
    return view('auth/login');
  }

  public function login(Request $request){
    $userdata = array(
      $this->username() => 'username|string',
      'password'=>'required|string'
    );
    if (Auth::attempt($userdata, true)) {
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

    public function getAuthPassword()
    {
        return $this->password;
    }

}
