<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get 4 latest articles
        $articles = Article::latest()->take(4)->get();
        return view('home', compact('articles'));
    }

    public function article(Request $request)
    {
        $search = $request->search;
        // if search is not empty
        if ($search) {
            $articles = Article::where('title', 'like', "%$search%")->latest()->paginate(8);
        } else {
            $articles = Article::latest()->paginate(8);
        }

        return view('article', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id); // Menemukan artikel berdasarkan ID
        return view('article-detail', compact('article')); // Menampilkan tampilan detail artikel
    }
}
