<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request) {
        if(Auth::guard('guest')->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/guest');
        }
        elseif((Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password]))){
            return redirect ('/admin');
        }
        elseif((Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password]))){
            return redirect ('/admin/reservation');
        }
    } 

    public function logout() {
        if(Auth::guard('guest')->check()){
            Auth::guard('guest')->logout();
        }elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/');
    } 
}
