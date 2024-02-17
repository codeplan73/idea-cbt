<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoPlayBack;
use Illuminate\Support\Facades\Storage;

class VideoLessonController extends Controller
{
    public function index()
    {
        $student_class = Auth::guard('student')->user()->Student_Class;
        $videos = VideoPlayBack::where('class', $student_class)->latest()->get();

        return view('video-lesson.index', ['videos' => $videos]);
    }

    public function show(VideoPlayBack $video)
    {
        return view('video-lesson.show', ['video' => $video]);
    }
}
