<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    public function index()
    {
        $herodata = HeroSection::first();
        return view('backend.hero-section.index', compact('herodata'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
        ]);


        $profile = HeroSection::updateOrCreate(

            ['id' => 1],

            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        toastr()->success('Hero Section Updated successfully');
        return redirect()->back();
    }
}
