<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\System;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Rules\PdfDocValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\SystemSetup;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
         $systemSetup = SystemSetup::first();
        return view('notes.index', ['notes' => $notes, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $systems = System::all();
         $systemSetup = SystemSetup::first();
        return view('notes.create', ['systems' => $systems, 'systemSetup' => $systemSetup]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $note = new Note;
        $lastNoteId = Note::latest('note_id')->first();

        if ($lastNoteId) {
            $newNoteId =  $lastNoteId->note_id + 1;
        } else {
            $newNoteId = 101;
        }



        $data = $request->validate([
            'subject' => 'required',
            'class' => 'required',
            'term' => 'required',
            'session' => 'required',
            'week' => 'required',
            'note_pdf' => ['required', new PdfDocValidationRule],
        ]);
        
        $notePdfName = 'note_pdf/'.$data['subject'] . '-' . $data['class'] . '.' . $request->file('note_pdf')->getClientOriginalExtension();

        $existingNote = Note::where('note_pdf', $notePdfName)->first();

        if ($existingNote) {
            return back()->with('message', 'E-Lesson Note already exists');
        }

        if ($request->hasFile('note_pdf')) {
            $fileName = Str::slug($data['subject']) .'-' .$data['class']. '.' . $request->file('note_pdf')->getClientOriginalExtension();

            $note_pdf = $request->file('note_pdf');
            $note_Pdf_Path = $note_pdf->storeAs('note_pdf', $fileName, 'public');
        }

        $note->staff_id = auth()->user()->Staff_ID;
        $note->subject = $data['subject'];
        $note->class = $data['class'];
        $note->term = $data['term'];
        $note->session = $data['session'];
        $note->week = $data['week'];
        $note->note_id = $newNoteId;
        $note->note_pdf = $note_Pdf_Path;

        $note->save();

        return redirect('/note')->with('message', 'E-Lesson Note created successfully');
    }

    public function show(Note $note)
    {
         $systemSetup = SystemSetup::first();
        return view('notes.show', ['note' => $note, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        $systems = System::all();
         $systemSetup = SystemSetup::first();
        return view('notes.edit', [
            'note' => $note,
            'systems' => $systems,
            'systemSetup' => $systemSetup,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        // Check if the user has the necessary permissions
        // if (auth()->user()->role !== 'admin' || auth()->user()->Staff_ID !== $note->staff_id) {
        //     return redirect('/note')->with('error', 'You do not have permission to perform this action.');
        // }

        $data = $request->validate([
            'subject' => 'required',
            'class' => 'required', 
            'term' => 'required',
            'session' => 'required',
            'week' => 'required',
            'note_pdf' => [new PdfDocValidationRule],
        ]);     

        if ($request->hasFile('note_pdf')) {
            
            if ($note->note_pdf && Storage::disk('public')->exists($note->note_pdf)) {
                Storage::disk('public')->delete($note->note_pdf);
            }

            $fileName = Str::slug($data['subject']) .'-' .$data['class']. '.' . $request->file('note_pdf')->getClientOriginalExtension();
            $note_pdf = $request->file('note_pdf');
            $note_Pdf_Path = $note_pdf->storeAs('note_pdf', $fileName, 'public');
        }else {
            $note_Pdf_Path = $note->note_pdf;
        }

        $note->subject = $data['subject'];
        $note->class = $data['class'];
        $note->term = $data['term'];
        $note->session = $data['session'];
        $note->week = $data['week'];
        $note->note_pdf = $note_Pdf_Path;
        
        $note->update();

        return redirect('/note')->with('message', 'E-Lesson Note Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        // Check if the user has the necessary permissions
        // if (auth()->user()->role !== 'admin' || auth()->user()->Staff_ID !== $note->staff_id) {
        //     return redirect('/note')->with('error', 'You do not have permission to perform this action.');
        // }

        if ($note->note_pdf && Storage::disk('public')->exists($note->note_pdf)) {
            Storage::disk('public')->delete($note->note_pdf);
        }

        $note->delete();

        return back()->with('message', 'Note deleted successfully');
    }
}