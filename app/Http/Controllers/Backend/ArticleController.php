<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article =  Article::orderBy('id', 'DESC')->get();
        return view('backend.article.index', compact('article'));
    }

    public function create()
    {
        return view('backend.article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->save();
        toastr()->success('Article Created Successfully');
        return redirect()->route('article.index');
    }

    public function edit(string $id)
    {
        $article =  Article::findOrFail($id);
        return view('backend.article.edit', compact('article'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->status = $request->status;
        $article->save();
        toastr()->success('Article Updated Successfully');
        return redirect()->route('article.index');
    }

    public function destroy(string $id)
    {
        $article =  Article::findOrFail($id)->delete();
        toastr()->success('Article Deleted Successfully');
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
