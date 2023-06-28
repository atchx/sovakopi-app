<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->roles == "Pemilik") {
                return redirect()->intended('/dashboard');
            } elseif (auth()->user()->roles == "Kasir") {
                return redirect()->intended('/kasir');
            } elseif (auth()->user()->roles == "Dapur") {
                return redirect()->intended('/kitchen');
            }
        }

        return back()->with('loginError', 'Username atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
