<?php

namespace App\Http\Controllers;

use App\Models\VideoPlayBack;
use App\Models\System;
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
        $systems = System::all();
        return view('videos.create', ['systems' => $systems]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'topic' => 'required',
            'subject' => 'required',
            'week' => 'required',
            'class' => 'required',
            'term' => 'required',
            // 'start_date' => 'required|date',
            // 'start_time' => 'required|date_format:H:i',
            'video_file' => ['required', new VideoValidationRule],
        ]); 

        $videoPlayBack = new VideoPlayBack;

        $fileName = Str::slug($data['topic']) .'-'. $data['subject'] .'-'. $data['class']. '.' . $request->file('video_file')->getClientOriginalExtension();

        $fileType = $request->file('video_file')->getClientOriginalExtension();
        $video_file = $request->file('video_file');
        $video_file_Path = $video_file->storeAs('videos', $fileName, 'public');
    

        $videoPlayBack->topic = $data['topic'];
        $videoPlayBack->subject = $data['subject'];
        $videoPlayBack->week = $data['week'];
        $videoPlayBack->class = $data['class'];
        $videoPlayBack->term = $data['term'];
        // $videoPlayBack->start_date = $data['start_date'];
        // $videoPlayBack->start_time = $data['start_time'];
        $videoPlayBack->file_type = $fileType;
        $videoPlayBack->video = $video_file_Path;

        $videoPlayBack->save();

        return redirect('/videos')->with('message', 'Video Lesson Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(VideoPlayBack $video)
    {
        return view('videos.show', ['video' => $video]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VideoPlayBack $video)
    {
        $systems = System::all();
        return view('videos.edit', [
            'systems' => $systems,
            'video' => $video,
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VideoPlayBack $video)
    {
        $data = $request->validate([
            'topic' => 'required',
            'subject' => 'required',
            'week' => 'required',
            'class' => 'required',
            'term' => 'required',
            // 'start_date' => 'required|date',
            // 'start_time' => 'required',
        ]);

        if ($request->hasFile('video_file')) {
            if ($video->video && Storage::disk('public')->exists($video->video)) {
                Storage::disk('public')->delete($video->video);
            }

            $fileName = Str::slug($data['topic']) . '-' . $data['subject'] . '-' . $data['class'] . '.' . $request->file('video_file')->getClientOriginalExtension();
            $video_file_Path = $request->file('video_file')->storeAs('videos', $fileName, 'public');
            $fileType = $request->file('video_file')->getClientOriginalExtension(); // Assuming you want to store the file extension as the file type
        } else {
            $fileType = $video->file_type;
            $video_file_Path = $video->video;
        }

        // Instead of setting each property individually, you can use the fill method if you prefer
        $video->fill([
            'topic' => $data['topic'],
            'subject' => $data['subject'],
            'week' => $data['week'],
            'class' => $data['class'],
            'term' => $data['term'],
            // 'start_date' => $data['start_date'],
            // 'start_time' => $data['start_time'],
            'file_type' => $fileType,
            'video' => $video_file_Path,
        ]);

        // Save the changes to the existing record
        $video->save();

        return redirect('/videos')->with('message', 'Video Lesson Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoPlayBack $video)
    {
        if ($video->video && Storage::disk('public')->exists($video->video)) {
            Storage::disk('public')->delete($video->video);
        }

        $video->delete();

        return back()->with('message', 'Video deleted successfully');
    }
}
