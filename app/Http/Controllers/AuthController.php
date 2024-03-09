<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        validator($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ])->validate();

        if (auth()->attempt($request->only(['email', 'password']))) {
            return redirect('/todo');
        }
        return redirect()->back()->withErrors(['Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login')->withErrors(['Logget out!']);
    }
}
