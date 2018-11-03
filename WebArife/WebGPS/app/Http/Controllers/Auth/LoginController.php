<?php

namespace webGps\Http\Controllers\Auth;

use Auth;
use DB;
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
    /*$credentials = array(
      $usr= $request->input('email'),
      $pass= $request->input('password')
    );
    return $credentials;*/

      $query=trim($request->get('email'));
      $users=DB::table('usuarios')
      ->select('email','password')
      ->where('email','LIKE','%'.$query.'%')
      ->orderBy('id','desc')
      ->paginate(7);
      foreach($users as $value){
         if(!empty($value)){
            echo 'hola';
         }
      }
      //return $users;


    /*  $credentials = $this->validate(request(),[
        'email'=>'required|string',
        'password'=>'required|string'
      ]);
      //if (Auth::attempt($credentials)) {
        return $credentials;
      //}
        /*return back()
        ->withErrors(['email'=> trans('auth.failed')])
        ->withInput(request(['email']));*/
    }

}
