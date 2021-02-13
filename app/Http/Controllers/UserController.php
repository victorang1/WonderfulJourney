<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function showProfileForm() {
        $user = User::where('id', Auth::id())->first();
        return view('profile')->with('user', $user);
    }

    public function updateProfile(Request $request) {
        $user = User::where('id', Auth::id())->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('home')->with('success', 'Update profile success');
    }
}
