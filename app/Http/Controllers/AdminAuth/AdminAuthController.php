<?php

namespace App\Http\Controllers\AdminAuth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AdminAuthController extends Controller
{
  // use AuthenticatesAndRegistersUsers, ThrottlesLogins;
  use AuthenticatesUsers, RegistersUsers {
    AuthenticatesUsers::redirectPath insteadof RegistersUsers;
    AuthenticatesUsers::guard insteadof RegistersUsers;
  }
  // use ThrottlesLogins;
  protected $redirectTo = '/dashboard';
  protected $guard = 'admin';
  
  public function showLoginForm() {
    if(Auth::guard('admin')->check()) {
      return redirect('/dashboard');
    }
    return view('login');
  }

  public function logout() {
    Auth::guard('admin')->logout();
    return redirect('/');
  }

}