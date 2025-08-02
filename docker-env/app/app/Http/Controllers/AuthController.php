<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email' => 'メールアドレスかパスワードが間違っています',
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login-custom');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function showRegisterCheck(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $hidden_password = str_repeat('●', strlen($request->password));

        return view('reg_check', [
            'name' => $request->name,
            'email' => $request->email,
            'password_hidden' => $hidden_password,
            'password' => $request->password,
        ]);
    }

    public function doRegister(Request $request)
{
    \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('register.done');
}

    public function showRegisterDone()
    {
        return view('reg_done');
    }

    public function showPwRequestForm()
    {
        return view('pw_request');
    }
    public function sendPwRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        return redirect('/pw_request')->with('status', 'パスワードリセットの案内メールを送信しました。');
    }
}
