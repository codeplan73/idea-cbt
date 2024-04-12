<?php

namespace App\Http\Controllers;

use App\Models\QuestionCode;
use App\Models\System;
use Illuminate\Http\Request;
use App\Models\SystemSetup;

class QuestionCodeController extends Controller
{
    public function index()
    {
        $questionCodes = QuestionCode::all();
        $systems = System::all();
         $systemSetup = SystemSetup::first();
        
        return view('question-code.index', [
            'questionCodes' => $questionCodes,
            'systems' => $systems,
            'systemSetup' => $systemSetup
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'class' => 'required|unique:question_codes,class,NULL,id,question_code,' . $request->question_code,
            'question_code' => 'nullable|unique:question_codes,question_code,NULL,id',
            // Add other validation rules as needed
        ]);

        $existingClassRecord = QuestionCode::where('class', $request->class)->first();

        if ($existingClassRecord) {
            return back()->withErrors(['class' => 'A record with this class already exists.'])->withInput();
        }   

        $questionCode = new QuestionCode;
        $questionCode->class = $request->class;
        $questionCode->question_code = $request->question_code;
        $questionCode->save();
        return back()->with('message', 'Created successfully');
    }


    public function edit(QuestionCode $questionCode)
    {
        $systems = System::all();
         $systemSetup = SystemSetup::first();

        return view('question-code.edit', [
            'questionCode' => $questionCode,
            'systems' => $systems,
            'systemSetup' => $systemSetup
        ]);
    }


    public function update(Request $request, QuestionCode $questionCode)
    {
        $request->validate([
            'question_code' => 'nullable|unique:question_codes,id,' . $questionCode->id,
        ]);

        // Check if the new question code already exists in the table (excluding empty values)
        if (!empty($request->question_code)) {
            $existingQuestionCode = QuestionCode::where('question_code', $request->question_code)
                ->where('id', '!=', $questionCode->id)
                ->first();

            if ($existingQuestionCode) {
                return back()->withErrors(['question_code' => 'The question code already exists.'])->withInput();
            }
        }

        // Update the question code if it's not empty
        if (!empty($request->question_code)) {
            $questionCode->question_code = $request->question_code;
            $questionCode->update();
        } else {
            $questionCode->question_code = $request->question_code;
            $questionCode->update();
        }
        return redirect('/question-code')->with('message', 'Update Successfully');

    }


    public function destroy(QuestionCode $questionCode)
    {
         if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }
        $questionCode->delete();
        return back()->with('message', 'Deleted successfully');
    }
}