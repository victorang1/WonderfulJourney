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

        return redirect()->back();
    }
    
    public function showCreateArticleForm() {
        return view('createArticle');
    }

    public function createArticle(Request $request) {

        $image = $request->file('photo');
        $path = public_path().'/article';
        $fileName = time().'-'.$image->getClientOriginalName();
        $image->move($path, $fileName);

        Article::create([
            'user_id' => Auth::id(),
            'category_id' => $request['category'],
            'title' => $request['title'],
            'description' => $request['story'],
            'image' => $fileName
        ]);

        return redirect()->route('blog')->with('success', 'Create Article Success');
    }

    public function detail($id) {
        $article = Article::find($id);
        return view('detail')->with('article', $article);
    }
}
