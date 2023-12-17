<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\System;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Result::all();
        return view('results.index', ['results' => $results]);
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.pin');
    }


    public function createClassResult(Request $request)
    {
        $systems = System::all();
        return view('results.printForm', ['systems' => $systems]);
    }

    public function storeClassResult(Request $request)
    {
        $class = $request->class;
        $results = Result::where('class', $class)->get();

        // dd(count($results));
        
        if(count($results) == 0 ){
            return  back()->with('message', 'No result for ' . $class. ' Yet');
        }

        return view('results.printClassResult', [
            'results' => $results,
            'class' => $class
        ]);
    }
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        return view('results.edit', ['result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        $result->Name = $request->Name;
        $result->Session = $request->Session;
        $result->Class = $request->Class;
        $result->Term = $request->Term;

        $result->English = $request->English;
        $result->Maths = $request->Maths;
        $result->Civic = $request->Civic;
        $result->Marketing = $request->Marketing;
        $result->Economics = $request->Economics;
        $result->Biology = $request->Biology;
        $result->Chemistry = $request->Chemistry;
        $result->Islamic_Stud = $request->Islamic_Stud;
        $result->Gen_Stud = $request->Gen_Stud;
        $result->Business_Stud = $request->Business_Stud;
        $result->Grammer = $request->Grammer;
        $result->Computer = $request->Computer;
        $result->C_Arts = $request->C_Arts;
        $result->Basic_Sc = $request->Basic_Sc;
        $result->Agric_Sc = $request->Agric_Sc;
        $result->Arabic = $request->Arabic;
        $result->Hadith = $request->Hadith;
        $result->Tefseer = $request->Tefseer;
        $result->Taoheed = $request->Taoheed;
        $result->Tarikh = $request->Tarikh;
        $result->Qawaid = $request->Qawaid;
        $result->Fiqh = $request->Fiqh;
        $result->Adab = $request->Adab;
        $result->Balaga = $request->Balaga;

        $result->update();

        return redirect('/results')->with('message', 'Result Updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return back()->with('message', 'Result deleted successfully');
    }
}