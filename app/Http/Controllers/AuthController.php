<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {

        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required'
        ]);

        $is_active = User::where('username', $request->username)->first()->is_active;

        $remember_token = ($request->has('remember_token')) ? true : false;
        if (!$is_active) {
            return redirect()->back()->withInput()->withErrors(['blocked' => 'Akses di blokir oleh administrator',]);
        } elseif (Auth::attempt($request->only('username', 'password'), $remember_token)) {
            return redirect()->intended('admin/dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['password' => 'Wrong Password.',]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
