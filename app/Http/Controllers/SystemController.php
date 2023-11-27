<?php

namespace App\Http\Controllers;

use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systems = System::all();
        return view('system.index', ['systems' => $systems ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('system.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $system = new System;
        // dd($request->all());

         // Get the last mem_id from the user table
        $lastId = System::latest('system_id')->first();

        // Check if there are any existing users
        if ($lastId) {
            $system_id = $lastId->system_id + 1;
        } else {
            $system_id = 101;
        }
        
        $system->subject = $request->subject;
        $system->session = $request->session;
        $system->branch = $request->branch;
        $system->class = $request->class;
        $system->term = $request->term;
        $system->student_status = $request->student_status;
        $system->staff_status = $request->staff_status;
        $system->system_id = $system_id;
        $system->question_type = $request->question_type;
        $system->exam_type = $request->exam_type;
        $system->week = $request->week;

        $system->save();
        return back()->with('message', 'System Item added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(System $system)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(System $system)
    {
        return view('system.edit', ['system' => $system]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, System $system)
    {
        $system->subject = $request->subject;
        $system->session = $request->session;
        $system->branch = $request->branch;
        $system->class = $request->class;
        $system->term = $request->term;
        $system->student_status = $request->student_status;
        $system->staff_status = $request->staff_status;
        $system->question_type = $request->question_type;
        $system->exam_type = $request->exam_type;
        $system->week = $request->week;
            
        $system->update();
         return redirect('/system')->with('message', 'System Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(System $system)
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }

        $system->delete();

        return back()->with('message', 'System Item deleted successfully');
    }
}