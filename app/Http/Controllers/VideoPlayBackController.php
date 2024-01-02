<?php

namespace App\Http\Controllers;

use App\Models\VideoPlayBack;
use Illuminate\Http\Request;

use App\Rules\VideoValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoPlayBackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = VideoPlayBack::all();
        return view('videos.index', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'start_time' => 'required',
            'video_file' => ['required', new VideoValidationRule],
        ]); 

        $videoPlayBack = new VideoPlayBack;

        if ($request->hasFile('video_file')) {
            $fileName = Str::slug($data['title']) . '.' . $request->file('video_file')->getClientOriginalExtension();

            $video_file = $request->file('video_file');
            $video_file_Path = $video_file->storeAs('video_file', $fileName, 'public');
        }

        $videoPlayBack->title = $data['title'];
        $videoPlayBack->start_date = $data['start_date'];
        $videoPlayBack->start_time = $data['start_time'];
        $videoPlayBack->video = $video_file_Path;

        $videoPlayBack->save();

        return redirect('/videos')->with('message', 'Video Lesson Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(VideoPlayBack $videoPlayBack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoPlayBack $videoPlayBack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoPlayBack $videoPlayBack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoPlayBack $videoPlayBack)
    {
        //
    }
}
