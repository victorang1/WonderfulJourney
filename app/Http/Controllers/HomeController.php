<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class HomeController extends Controller
{
    public function showHome() {
        $articles = Article::all();
        return view('home')->with('articles', $articles);
    }

    public function showCategory(Request $request) {
        $selectedCategory = $request->category;
        $category = Category::where('name', $selectedCategory)->first();
        $articles = Article::where('category_id', $category->id)->get();
        return view('category')->with('articles', $articles);
    }
}
