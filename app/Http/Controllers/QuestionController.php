<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\System;
use App\Models\QuestionCode;
use Illuminate\Http\Request;
use App\Rules\PdfDocValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systems = System::all();
        $questions = Question::latest()->get();
        $questions = Question::latest()->get();
        return view('questions.index', [
            'systems' => $systems,
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $systems = System::all();
        return view('questions.create', ['systems' => $systems]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        
        $data = $request->validate([
            'subject_teacher' => 'required',
            'total_question' => 'required',
            'alloted_mark' => 'required',
            'total_mark' => 'required',
            'question_type' => 'required',
            'exam_type' => 'required',
            'session' => 'required',
            'term' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'time_minutes' => 'required',
            'question_pdf' => ['required', new PdfDocValidationRule],
        ]);

        $question_status = 'closed';
        $question = new Question;
        $last_question_id = Question::latest('question_id')->first();

        if ($last_question_id) {
            $new_question_Id =  $last_question_id->question_id + 1 . $data['class'];
        } else {
            $new_question_Id = 101;
        }

        if ($request->hasFile('question_pdf')) {
             $fileName = Str::slug($data['subject']) .'-' .$data['class'].'-'. $data['exam_type'].'-'. $data['term']. '.' . $request->file('question_pdf')->getClientOriginalExtension();

            $question_pdf = $request->file('question_pdf');
            $question_Pdf_Path = $question_pdf->storeAs('question_pdf', $fileName, 'public');
        }

        $data['question_pdf'] = $question_Pdf_Path;
        $data['question_status'] = $question_status;
        $data['question_id'] = $new_question_Id;
        
        for ($i = 1; $i <= 50; $i++) {
            $fieldName = 'q' . $i;
            $data[strtoupper($fieldName)] = $request->input($fieldName);
        }

        Question::create($data);

        return redirect('/question')->with('message', 'Question created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function ManageQuestions()
    {
        // $examCode = ExamCode::latest()->get()->first();
        $QuestionCode = QuestionCode::latest()->get();
        $questions = Question::latest()->get();
        return view('questions.list', [
            'questions' => $questions,
            'QuestionCode' => $QuestionCode
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $systems = System::all();
        return view('questions.edit', compact('systems', 'question'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Question $question)
    {
        $data = $request->validate([
            'subject_teacher' => 'required',
            'total_question' => 'required',
            'question_type' => 'required',
            'exam_type' => 'required',
            'session' => 'required',
            'term' => 'required',
            'class' => 'required',
            'subject' => 'required',
            'alloted_mark' => 'required',
            'total_mark' => 'required',
            'time_minutes' => 'required',
        ]);

        if ($request->hasFile('question_pdf')) {
            if ($question->question_pdf && Storage::disk('public')->exists($question->question_pdf)) {
                Storage::disk('public')->delete($question->question_pdf);
            }

            $fileName = Str::slug($data['subject']) .'-' .$data['class'].'-'. $data['exam_type'].'-'. $data['term']. '.' . $request->file('question_pdf')->getClientOriginalExtension();
            $question_pdf = $request->file('question_pdf');
            $question_Pdf_Path = $question_pdf->storeAs('question_pdf', $fileName, 'public');
            $data['question_pdf'] = $question_Pdf_Path;
        }

        // Extract q1 to q50 fields from $request and add them to $data array
        for ($i = 1; $i <= 50; $i++) {
            $fieldName = 'q' . $i;
            // $data[$fieldName] = $request->input($fieldName);
            $data[strtoupper($fieldName)] = $request->input($fieldName);
        }

        $question->update($data);

        return redirect('/question')->with('message', 'Question Updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
         if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }

        if ($question->question_pdf && Storage::disk('public')->exists($question->question_pdf)) {
            Storage::disk('public')->delete($question->question_pdf);
        }

        $question->delete();

        return back()->with('message', 'Note deleted successfully');
    }
}