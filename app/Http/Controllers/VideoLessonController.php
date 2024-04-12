<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoPlayBack;
use Illuminate\Support\Facades\Storage;
use App\Models\SystemSetup;

class VideoLessonController extends Controller
{
    public function index()
    {
         $systemSetup = SystemSetup::first();
        $student_class = Auth::guard('student')->user()->Student_Class;
        $videos = VideoPlayBack::where('class', $student_class)->latest()->get();

        return view('video-lesson.index', ['videos' => $videos, 'systemSetup' => $systemSetup]);
    }

    public function show(VideoPlayBack $video)
    {
         $systemSetup = SystemSetup::first();
        return view('video-lesson.show', ['video' => $video, 'systemSetup' => $systemSetup]);
    }
}
