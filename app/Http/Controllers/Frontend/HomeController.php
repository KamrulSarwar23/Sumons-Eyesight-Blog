<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function homePage()
    {


        return view('frontend.pages.index');
    }

    public function videoPage()
    {

        $videos = Video::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('frontend/pages/videos', compact('videos'));
    }

    public function blogPage()
    {

        return view('frontend/pages/blog');
    }
}
