<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $user = User::where('email', '=', $request->email)->first();
        if ($user->role === $request->role) {
            // coba login
            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ], false)) {
                return redirect()->intended('/');
            }
            else {
                return redirect()->back()->withErrors(['Incorrect Credentials']);
            }
        }
        else {
            return redirect()->back()->withErrors(['Role doesn\'t match']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}