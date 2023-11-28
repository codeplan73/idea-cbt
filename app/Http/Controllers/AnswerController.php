<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\System;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionCode;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_class = Auth::guard('student')->user()->Student_Class;
    
        $examCode = QuestionCode::where('class', $student_class)->first();
        $questionCode = $examCode->question_code;

        $question = Question::where('question_id', $questionCode)->where('class', $student_class)->first();

        if($question){
            return view('exam.index', ['question' => $question]);
        }else {
            return redirect('/student')->with('noexam', 'Sorry no question set for your class currently');
        }
    } 

    public function answersList()
    {
        $answers = Answer::all();
        return view('answers.index', ['answers' => $answers]);
    }
 
    public function create()
    {
        $student_class = Auth::guard('student')->user()->Student_Class;
        $student_id = Auth::guard('student')->user()->Student_ID;
    
        $examCode = QuestionCode::where('class', $student_class)->first();
        $questionCode = $examCode->question_code;

        $question = Question::where('question_id', $questionCode)->where('class', $student_class)->first();

        $answer = Answer::where('student_id', $student_id)->first();

        if(!$answer){
             return redirect('/student');
        }else{
             if($question){
            return view('exam.create', ['question' => $question]);
            }else {
                return redirect('/student')->with('noexam', 'Sorry no question set for your class currently');
            }
        }       
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "Student_ID" => "required",
            "Fullnames" => "required",
            "Student_Class" => "required",
            "Branch" => "required",
            "question_id" => "required",
            "question_type" => "required",
            "exam_type" => "required",
            "subject" => "required",
            "term" => "required",
            "session" => "required",
        ]);

        if($data['question_type'] == 'Objective'){
            $student = Auth::guard('student')->user();
            $answer = Answer::where('student_id', $student->Student_ID)
                        ->where('exam_id', $data['question_id'])
                        ->first();

            // Check if student has already taken the specified test or exam
            if ($answer && $answer->exam_type == $data['exam_type']) {
                // Student has already taken this test/exam, redirect back
                return redirect()->back()->with('message', 'You have already taken this test/exam.');
            }

            // Student is submitting for the first time or taking a new test/exam, update the respective field
            if (!$answer) {
                // Student is submitting for the first time, create a new record
                $answer = new Answer;
                $answer->student_id = $data['Student_ID'];
                $answer->name = $data['Fullnames'];
                $answer->class = $data['Student_Class'];
                $answer->branch = $data['Branch'];
                $answer->exam_id = $data['question_id'];
                $answer->term = $data['term'];
                $answer->session = $data['session'];
                $answer->subject = $data['subject'];
                $answer->question_type = $data['question_type'];
                $answer->exam_type = $data['exam_type'];
            }
            // Save the updated or new record
            $answer->save();

            return redirect('/exam')->with('message', 'Welcome, Continue with your exam, your time has started');
        }else if($data['question_type'] == 'Theory'){
            return redirect('/exam')->with('message', 'Welcome, Continue with your exam, your time has started');
        }
    }

    private function hasTakenTestOrExam($answer, $examType) {
        return in_array($examType, [$answer->test1, $answer->test2, $answer->test3, $answer->exam]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
        return view('answers.edit', ['answer' => $answer]);
    }

    public function adminUpdateAnswer(Request $request, Answer $answer)
    {
        // dd($request->all());
        $answer->exam_type = $request->exam_type;
        $answer->score = $request->score;
        $answer->update();

        return redirect('/answers')->with('message', 'Student answer updated successfully');
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {
        $userId = auth()->guard('student')->user()->Student_ID;
        $subject = $request->subject;
        $examType = $request->exam_type;

        $answer = $this->getAnswer($subject, $userId, $examType);

        $selectedOptions = $request->selectedOptions;
        $answersObj = $request->answersObj;
        $allottedMark = $request->allottedMark;

        $total_score = $this->calculateTotalScore($selectedOptions, $answersObj, $allottedMark);

        $this->updateAnswer($answer, $total_score);
        $this->updateResult($request, $total_score);

        return redirect('/student')->with('exammessage', 'You Completed Your Test/Exam Successfully, your score is ' . $total_score. ' Marks');
    }

    function calculateTotalScore($selectedOptions, $answers, $allottedMark) {
        // Decode JSON strings into associative arrays
        $selectedOptionsArray = json_decode($selectedOptions, true);
        $answersArray = json_decode($answers, true);

        $total_score = 0;

        // Compare the values and calculate total score
        foreach ($selectedOptionsArray as $questionNumber => $selectedAnswer) {
            if (isset($answersArray[$questionNumber]) && $selectedAnswer === $answersArray[$questionNumber]) {
                $total_score += $allottedMark;
            }
        }

        return $total_score;
    }

    private function getAnswer($subject, $userId, $examType)
    {
        return Answer::where('subject', $subject)
            ->where('student_id', $userId)
            ->where('exam_type', $examType)
            ->first();
    }

    private function updateAnswer($answer, $total_score)
    {
        if ($answer) {
            $answer->score = $total_score;
            $answer->update();
        } 
    }

    private function updateResult($request, $total_score)
    {
        $student = Auth::guard('student')->user();
        $result = Result::where('student_id', $student->Student_ID)->first();

        // Student is submitting for the first time, create a new record
        if (!$result) {
            $result = new Result;
        
            // $result->stud_id = $student->id;
            $result->student_id = $student->Student_ID;
            $result->Name = $student->Fullnames;

            $result->session = $request->session;
            $result->Class = $request->class;
            $result->Term = $request->term;
        }

        $result->{$request->subject} += $total_score;
        $result->save();
    }

    public function destroy(Answer $answer)
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }

        $studentId = $answer->student_id;
        $class = $answer->class;
        $subject = $answer->subject;
        $score = $answer->score;

        if($score != 0) {
            // Subtract the score from the result table
            Result::where('student_id', $studentId)
                ->where('class', $class)
                ->decrement($subject, $score);

                 $answer->delete();
        }else{
            $answer->delete();
        }

        // Delete the answer record

        return back()->with('message', 'Student answer deleted successfully');
    }
}