<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\HeroSection;
use App\Models\Image;
use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homePage()
    {
        $profile = Profile::first();
        $herodata = HeroSection::first();
        $images = Image::where('status', 1)->inRandomOrder()->limit(9)->get();
        $videos = Video::where('status', 1)->inRandomOrder()->limit(6)->get();
        $article = Article::where('status', 1)->inRandomOrder()->limit(6)->get();
        return view('frontend.pages.index', compact('videos', 'article', 'images', 'profile', 'herodata'));
    }

    public function allArticle(string $id)
    {
        $article = Article::findOrFail($id);
        return view('frontend.pages.article-details', compact('article'));
    }

    public function videoPage()
    {
        $videos = Video::where('status', 1)->orderBy('id', 'DESC')->paginate(15);;
        return view('frontend.pages.videos', compact('videos'));
    }

    public function articlePage()
    {
        $article = Article::where('status', 1)->orderBy('id', 'DESC')->paginate(12);
        return view('frontend.pages.article', compact('article'));
    }

    public function blogPage()
    {
        $images = Image::orderBy('id', 'DESC')->paginate(30);
        return view('frontend.pages.blog', compact('images'));
    }
}
