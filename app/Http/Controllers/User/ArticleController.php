<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where("user_id", Auth::id())->latest()->paginate(10);
        return view('dashboard.article.index', compact('articles'));
    }

    public function create()
    {
        return view('dashboard.article.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image_path' => 'required|image'
        ]);

        $imagePath = request('image_path')->store('uploads', 'public');

        Article::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'category' => $data['category'],
            'image_path' => $imagePath,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('article.index')->with('success', 'Article created successfully');
    }

    public function edit(Article $article)
    {
        return view('dashboard.article.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image_path' => 'image'
        ]);

        if (request('image_path')) {
            $imagePath = request('image_path')->store('uploads', 'public');
            $article->update(array_merge($data, ['image_path' => $imagePath]));
        } else {
            $article->update($data);
        }

        return redirect()->route('article.index')->with('success', 'Article updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article deleted successfully');
    }
}
