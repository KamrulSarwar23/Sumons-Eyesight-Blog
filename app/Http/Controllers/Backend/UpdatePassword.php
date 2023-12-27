<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdatePassword extends Controller
{
    public function index()
    {
        return view('backend.update-pass.index');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'image' => ['nullable', 'max:5000'],
        ]);
       
        $user = Auth::user();
        $imageName = $user->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/profile', $imageName);
        }
        
        $user->image =$imageName;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr('Profile Updated Successfully');
        return redirect()->back();
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);
        $request->user()->update(['password' => bcrypt($request->password)]);
        
        toastr('Profile Updated Successfully');
        return redirect()->back();
    }
}
