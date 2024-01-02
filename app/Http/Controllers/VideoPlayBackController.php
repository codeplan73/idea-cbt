<?php

namespace App\Http\Controllers;

use App\Models\VideoPlayBack;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
