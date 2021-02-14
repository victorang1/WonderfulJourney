<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $user = User::where('email', '=', $request->email)->first();
        if ($user === null) return redirect()->back()->withErrors(['User not found']);
        else if ($user->role === $request->role) {
            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ], false)) {
                return redirect()->intended('/');
            }
        }
        return redirect()->back()->withErrors(['Incorrect Credentials']);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
