<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    public function showHome() {
        $articles = Article::all();
        return view('home')->with('articles', $articles);
    }
}
