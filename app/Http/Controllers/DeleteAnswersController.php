<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Result;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteAnswersController extends Controller
{
    /**
     * show view to delete answer by class and subject
    */
    public function answerByClass()
    {
        $systems = System::all();
        return view('answers.delete-by-class', ['systems' => $systems]);
    }

    /**
     * handle delete answer by class and subject
    */
    public function deleteByClass(Request $request)
    {
        $class = $request->input('class');
        $subject = $request->input('subject');

        if ($class && $subject) {

            // Get answers that match the criteria
            $deletedRows = Answer::where('class', $class)
                ->where('subject', $subject)
                ->get();

            // Iterate over the deleted rows to calculate and update the result table
            foreach ($deletedRows as $row) {
                $studentId = $row->student_id;
                $score = $row->score;

                // Subtract the score from the result table
                Result::where('student_id', $studentId)
                    ->where('class', $class)
                    ->decrement($subject, $score);
            }

            // Delete the answers
            $deletedRowsCount = Answer::where('class', $class)
                ->where('subject', $subject)
                ->delete();

            if ($deletedRowsCount > 0) {
                $message = "All $subject Answers for $class have been deleted successfully.";
            } else {
                $message = "Invalid $subject answers selection for $class";
            }

            return redirect('/answers')->with('message', $message);
        }

        return redirect('/answers')->with('message', 'Invalid input for deletion.');
    }

    /**
     * show view to delete answer by class & subject test type
    */
    public function answerByTestType()
    {
        $systems = System::all();
        return view('answers.delete-by-test-type', ['systems' => $systems]);
    }

    /**
     * handle delete answer by class & subject & test type
    */
    public function deleteByTestType(Request $request)
    {
        $class = $request->input('class');
        $subject = $request->input('subject');
        $examType = $request->input('exam_type');

        if ($class && $subject) {

            // Get answers that match the criteria
            $deletedRows = Answer::where('class', $class)
                ->where('subject', $subject)
                ->where('exam_type', $examType)
                ->get();

            // Iterate over the deleted rows to calculate and update the result table
            foreach ($deletedRows as $row) {
                $studentId = $row->student_id;
                $score = $row->score;

                // Subtract the score from the result table
                Result::where('student_id', $studentId)
                    ->where('class', $class)
                    ->decrement($subject, $score);
            }

            // Delete the answers
            $deletedRowsCount = Answer::where('class', $class)
                ->where('subject', $subject)
                ->where('exam_type', $examType)
                ->delete();

            if ($deletedRowsCount > 0) {
                $message = "All $subject $examType Answers for $class have been deleted successfully.";
            } else {
                $message = "Invalid $subject answers selection for $class";
            }

            return redirect('/answers')->with('message', $message);
        }

        return redirect('/answers')->with('message', 'Invalid input for deletion.');
    }

    /**
     * show view to delete all answers & clear result table
    */
    public function answerAll()
    {
        return view('answers.delete-answers');
    }

    /**
     * show view to delete all answers & clear result table
    */
    public function deleteAll(Request $request)
    {
        // Delete all records from the "answers" table
        $deletedAnswers = Answer::truncate();

        // Delete all records from the "results" table
        $deletedResults = Result::truncate();

        // Optionally, you can check if the deletion was successful
        if ($deletedAnswers && $deletedResults) {
            return redirect('/answers')->with('message', 'All records deleted successfully');
        } else {
            return redirect('/answers')->with('error', 'Deletion failed');
        }
    }

}
 