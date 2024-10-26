<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login() {
        return view('page.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only(['email', 'password']);

        if (Auth::attempt($data)) {
            return redirect()->route('nasabah');
        }
        return redirect()->back()->with('notif', 'Email atau password salah!');
    }

    public function postLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
