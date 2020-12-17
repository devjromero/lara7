<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');

    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $credentials = array_merge($credentials, array('status' => 1));

        if (Auth::attempt($credentials)) {
            // The user is active, not suspended, and exists.
            Auth::login(Auth::user());
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
