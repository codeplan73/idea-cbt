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
        $branch = $request->branch;
        $results = Result::where('class', $class)->where('Branch', $branch)->get();
        
        if(count($results) == 0 ){
            return  back()->with('message', 'No result for '.$branch. ' - ' . $class. ' Yet');
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
        $result->Grammar = $request->Grammar;
        $result->Phonics = $request->Phonics;
        $result->Science = $request->Science;
        $result->C_Arts = $request->C_Arts;
        $result->V_Stud = $request->V_Stud;
        $result->N_Value = $request->N_Value;
        $result->Literature = $request->Literature;
        $result->Business = $request->Business;
        $result->IRK = $request->IRK;
        $result->Computer = $request->Computer;
        $result->Arabic = $request->Arabic;
        $result->Qawaid = $request->Qawaid;
        $result->Hadith = $request->Hadith;
        $result->Taoheed = $request->Taoheed;
        $result->Fiqh = $request->Fiqh;
        $result->Tarikh = $request->Tarikh;
        $result->Ulum = $request->Ulum;
        $result->Tefseer = $request->Tefseer;
        $result->Adab = $request->Adab;
        $result->Balaga = $request->Balaga;
        $result->Economics = $request->Economics;
        $result->Marketing = $request->Marketing;
        $result->Civic = $request->Civic;
        $result->Biology = $request->Biology;
        $result->Physics = $request->Physics;
        $result->Agric = $request->Agric;
        $result->Chemistry = $request->Chemistry;
        $result->Kitaabah = $request->Kitaabah;

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