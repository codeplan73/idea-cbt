<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\CurrentTerm;
use App\Models\FirstTermResult;
use App\Models\SecondTermResult;
use App\Models\ThirdTermResult;
use App\Models\Subject;
use App\Models\Branch;

class CheckResultController extends Controller
{
    public function index()
    {
        $systems = System::all();
        return view('student.checkresult', ['systems' => $systems,]);
    }

    public function checkAndShow(Request $request)
    {
        $pin = $request->resultPin;
        $class = $request->class;
        $branch = $request->branch;
        $user = auth()->user('student');

        if (!$user || $user->Student_Pin !== $pin || !$branch) {
            return back()->with('error', 'You entered an invalid PIN');
        } 

        $latestTerm = CurrentTerm::latest()->first();

        if (!$latestTerm) {
            return redirect()->route('show.result')->with('error', 'No CurrentTerm records found.');
        }

        $user_id = $user->Student_ID;
        $term = $latestTerm->Current_Term; 
        $session = $latestTerm->Current_Session;
        

        $result = null;
        $subjects = Subject::where('C_Session', $session)->where('Branch', $branch)->first();
        $branches = Branch::where('Branch_Name', $branch)->first();

        // dd($subjects, $branches);

        if ($term == '1st Term') {
            $result = FirstTermResult::where('Student_ID', $user_id)
                ->where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->get();

            $totalStudent = FirstTermResult::where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->count();

        } elseif ($term == '2nd Term') {
            $result = SecondTermResult::where('Student_ID', $user_id)
                ->where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->get();

            $totalStudent = SecondTermResult::where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->count();

        } elseif ($term == '3rd Term') {
            $result = ThirdTermResult::where('Student_ID', $user_id)
                ->where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->get();

            $totalStudent = ThirdTermResult::where('Term', $term)
                ->where('C_Session', $session)
                ->where('Branch', $branch)
                ->where('Class', $class)
                ->count();

        }

        // dd($result);

        if ($result->isNotEmpty()) {
            return view('student.result', [
                'result' => $result,
                'subjects' => $subjects,
                'branches' => $branches,
                'totalStudent' => $totalStudent,
            ]);
        }

        return back()->with('error', 'No results found for the specified term, session, and branch.');
    }
 

    public function showResult()
    {
        $result = request()->session()->get('result');

        // You can also check if the result is present in the session
        // before using it to avoid issues if it's not set
        if (!$result) {
            // Handle the case where the result is not available
            abort(404); // or redirect to an error page
        }

        // return view('student.result', compact('result'));
        return view('student.result', ['result' => $result]);
    }

    public function showSetResult()
    {
        $currentTerms = CurrentTerm::all();
        return view('set-result.index', ['currentTerms' => $currentTerms]);
    }

    public function edit(CurrentTerm $cterm, Request $request)
    {
         $systems = System::all();
         return view('set-result.edit', ['cterm' => $cterm, 'systems' => $systems]);
    }

    public function update(Request $request)
    {
        $id = $request->input('ID');
        $currentTerm = $request->input('Current_Term');
        $currentSession = $request->input('Current_Session');
        $announcement = $request->input('announcement');
        // $branch = $request->input('Branch');

        // if ($id && $currentTerm && $currentSession && $branch) {
        if ($id && $currentTerm && $currentSession) {
            $update = CurrentTerm::where('ID', $id)
                ->update([
                    'Current_Term' => $currentTerm,
                    'Current_Session' => $currentSession,
                    'announcement' => $announcement,
                ]);

            if ($update > 0) {
                $message = "Current Term has been updated successfully.";
            } else {
                $message = "No matching Current Term found for update.";
            }

            return redirect('/set-result')->with('message', $message);
        } else {
            // Handle the case where any of the required fields are missing
            $message = "Missing required fields for update.";
            return redirect('/set-result')->with('error', $message);
        }
    }
}
