<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\CurrentTerm;
use App\Models\Branch;
use App\Models\QuestionCode;
use App\Models\Question;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $branch = CurrentTerm::pluck('Branch');
        $genInfo = Branch::where('Branch_Name', $branch)->first();

        // dd($genInfo->GenInfo);
        return view('student.dashboard', ['genInfo' => $genInfo]);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        return view('auth-student.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showRegistrationForm()
    {
        return view('auth-student.register');
    }


    public function create()
    {
        $systems = System::all();
        return view('manage-student.create', ['systems' => $systems]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'Fullnames' => 'required',
            'Student_ID' => ['required', 'string', 'max:255', 'unique:students'],
            'email' => ['required', 'string', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]); 

        $student = Student::create([
            'Fullnames' => $credentials['Fullnames'],
            'Student_ID' => $credentials['Student_ID'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'account_status' => 'Inactive',
            'ArabicName' => $credentials['Fullnames'],
            'Gender' => 'Gender',
        ]);

        return redirect('/student-login')->with('message', 'Account Created Successfully');
    }

    public function store(Request $request)
    {        
        // dd($request->all());
        
        $data = $request->validate([
            'Student_ID' => ['required', 'string', 'max:255', 'unique:students'],
            'Fullnames' => 'required',
            'Student_Class' => ['required'],
            'Branch' => ['required'],
            'Term' => ['required'],
            'Session_' => ['required'],
            'Current_Status' => ['required'],
            'Gender' => ['required'],
            'Student_Pin' => ['required'],
            'Phone_Number' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]); 

        $student = Student::create([
            'Student_ID' => $data['Student_ID'],
            'Fullnames' => $data['Fullnames'],
            'Student_Class' => $data['Student_Class'],
            'Branch' => $data['Branch'],
            'Term_Adm' => $data['Term'],
            'Session_' => $data['Session_'],
            'Current_Status' => $data['Current_Status'],
            'Gender' => $data['Gender'],
            'Student_Pin' => $data['Student_Pin'],
            'Phone_Number' => $data['Phone_Number'],
            'plain_password' => $data['password'],
            'password' => bcrypt($data['password']),
        ]);

        return redirect('/manage-student')->with('message', 'Student Account Created Successfully');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'Student_ID' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]); 

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended('/student');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function profile()
    {
        return view('student.profile');
    }
 
    public function manage()
    {
        $students = Student::where('Current_Status', 'Active')->get();
        return view('manage-student.index', ['students' => $students]);
    }

    public function edit(Student $student)
    {
        $systems = System::all();
        return view('manage-student.edit', ['student' => $student, 'systems' => $systems]);
    }

    public function update(Student $student, Request $request)
    {      
       $student->Fullnames = $request->Fullnames;
       $student->Student_Class = $request->Student_Class;
       $student->Branch = $request->Branch;
       $student->Term_Adm = $request->Term;
       $student->Session_ = $request->Session_;
       $student->Current_Status = $request->Current_Status;
       $student->Gender = $request->Gender;
       $student->Student_Pin = $request->Student_Pin;
       $student->Phone_Number = $request->Phone_Number;
       $student->plain_password = $request->password;
       $student->password =   bcrypt($request->password);
        
        $student->update();
        return redirect('/home')->with('message', 'Student info Update Successfully');
    }

    public function passwordUpdate(Request $request)
    {
        $data = $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'student_id' => ['required'],
        ]);

        // Hash the common password
        $hashedPassword = bcrypt($data['password']);

        // Find the student by Student_ID
        $student = Student::where('Student_ID', $data['student_id'])->first();

        // Check if the student exists
        if ($student) { 
            // Update password and plain_password for the found student
            $student->update([
                'password' => $hashedPassword,
                'plain_password' => $data['password'],
            ]);

            return redirect('/student')->with('exammessage', 'Your Password has been updated successfully');
        } else {
            return redirect('/student')->with('exammessage', 'Student not found with the specified ID');
        }
    }

    public function destroy(Student $student)
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }

        $student->delete();

        return back()->with('message', 'Student Account Removed Successfully');
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect()->route('student.login');
    }
}