<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        $videos =  Video::orderBy('id', 'DESC')->get();
        return view('backend.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'url' => ['required'],
            'status' => ['required'],
        ]);

        $videos = new Video();
        $videos->title = $request->title;
        $videos->url = $request->url;
        $videos->status = $request->status;
        $videos->save();
        toastr()->success('Videos Created Successfully');
        return redirect()->route('video.index');
    }

    public function edit(string $id)
    {
        $videos =  Video::findOrFail($id);
        return view('backend.videos.edit', compact('videos'));
    }

    public function update(string $id, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'url' => ['required'],
            'status' => ['required'],
        ]);

        $videos = Video::findOrFail($id);
        $videos->title = $request->title;
        $videos->url = $request->url;
        $videos->status = $request->status;
        $videos->save();
        toastr()->success('Videos Updated Successfully');
        return redirect()->route('video.index');
    }

    public function destroy(string $id)
    {
        $videos =  Video::findOrFail($id)->delete();
        toastr()->success('Videos Deleted Successfully');
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
