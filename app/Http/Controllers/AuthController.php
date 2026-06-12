<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect('/');
        }

        return back()->with('gagal','Email atau Password salah');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}