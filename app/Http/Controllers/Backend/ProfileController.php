<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {   $profile = Profile::first();
        return view('backend.profile.index', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'description' => ['required'],
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/profile', $imageName);

            $profile = Profile::updateOrCreate(

                ['id' => 1],

                [
                    'image' => $imageName,
                    'description' => $request->description,
                ]
            );

            toastr()->success('Profile Updated successfully');
            return redirect()->back();
        }
    }
}
