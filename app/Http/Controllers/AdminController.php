<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class AdminController extends Controller
{
    public function showViewUser() {
        $users = User::where('role', 'user')->get();
        return view('viewUser')->with('users', $users);
    }

    public function showViewAdmin() {
        $articles = Article::all();
        return view('viewAdmin')->with('articles', $articles);
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('viewUser')->with('success', 'Delete user success');
    }
}
