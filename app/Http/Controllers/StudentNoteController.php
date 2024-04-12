<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\SystemSetup;

class StudentNoteController extends Controller
{
     public function index()
    {
         $systemSetup = SystemSetup::first();
        $student_class = Auth::guard('student')->user()->Student_Class;
        $notes = Note::where('class', $student_class)->latest()->get();

        return view('classnote.index', ['notes' => $notes, 'systemSetup' => $systemSetup]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
         $systemSetup = SystemSetup::first();
        return view('classnote.show', ['note' => $note, 'systemSetup' => $systemSetup]);
    }
} 