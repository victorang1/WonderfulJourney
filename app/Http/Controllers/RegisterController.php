<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showRegistrationForm() {
        return view('register');
    }

    public function create(Request $request) {
        $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'role' => 'user',
            'remember_token' => $request['_token']
        ]);

        auth()->login($user);

        return redirect('/');
    }
}
