<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showViewUser() {
        $users = User::where('role', 'user')->get();
        return view('viewUser')->with('users', $users);
    }

    public function showViewAdmin() {
        $admins = User::where('role', 'admin')->get();
        return view('viewAdmin')->with('admins', $admins);
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('viewUser');
    }
}
