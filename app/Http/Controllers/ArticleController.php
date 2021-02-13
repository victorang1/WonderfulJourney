<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function showBlogs() {
        $articles = Article::where('user_id', Auth::id())->get();
        return view('blog')->with('articles', $articles);
    }

    public function deleteArticle($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('success', 'Delete article success');
    }
    
    public function showCreateArticleForm() {
        return view('createArticle');
    }

    public function createArticle(Request $request) {
        $image = $request->file('photo');
        $path = public_path().'/article';
        $fileName = time().'-'.$image->getClientOriginalName();
        $image->move($path, $fileName);

        $article = new Article;
        $article->user_id = Auth::id();
        $article->category_id = $request->category;
        $article->title = $request->title;
        $article->description = $request->story;
        $article->image = $fileName;
        $article->save();

        return redirect()->route('blog')->with('success', 'Create article success');
    }

    public function detail($id) {
        $article = Article::find($id);
        return view('detail')->with('article', $article);
    }
}
