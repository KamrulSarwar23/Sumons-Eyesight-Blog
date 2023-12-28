<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $images = Image::count();
        $videos = Video::count();
        $article = Article::count();
        return view('backend.dashboard', compact('videos', 'article', 'images'));
    }
}
