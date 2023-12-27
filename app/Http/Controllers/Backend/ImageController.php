<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::orderBy('id', 'DESC')->paginate(20);
        return view('backend.image.index', compact('images'));
    }

    public function create()
    {
        return view('backend.image.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'title' => ['required']
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $uploadedImage) {
                $imageName = uniqid() . "_" . time() . "." . $uploadedImage->getClientOriginalExtension();
                $uploadedImage->storeAs('public/images', $imageName);

                $imageModel = new Image();
                $imageModel->image =  $imageName;
                $imageModel->title = $request->title;
                $imageModel->status = $request->status;
                $imageModel->save();
            }
        }
        toastr()->success('Image saved successfully');
        return redirect()->route('image.index');
    }
    
    public function destroy(string $id)
    {
        $imageModel = Image::findOrFail($id)->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
