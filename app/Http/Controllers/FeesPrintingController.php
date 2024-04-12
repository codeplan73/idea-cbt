<?php

namespace App\Http\Controllers;

use App\Models\FeesPrinting;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\SystemSetup;

class FeesPrintingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $systemSetup = SystemSetup::first();
         $students = Student::
            whereIn('Current_Status', ['Active', 'Inactive'])
            ->select('ID', 'Student_ID', 'Fullnames', 'Plain_Password', 'Current_Status', 'Student_Pin', 'Current_Balance', 'Student_Class', 'Phone_Number')
            ->get();

        return view("fees-printing.index", [ 'students' => $students, 'systemSetup' => $systemSetup]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
            
         $systemSetup = SystemSetup::first();
         return view("fees-printing.show", [ 'student' => $student, 'systemSetup' => $systemSetup]);
    }
}