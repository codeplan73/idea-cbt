<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Book;
use App\Models\Student;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $questions = Question::all()->count();
        $totalStudent = Student::where('Current_Status', 'Active')->count();
        $iyakpi = Student::where('Branch', 'Hira Iyakpi')->where('Current_Status', 'Active')->count();
        $ogbido = Student::where('Branch', 'Hira Ogbido')->where('Current_Status', 'Active')->count();
        $kogi = Student::where('Branch', 'Hira Kogi')->where('Current_Status', 'Active')->count();
        $elamin = Student::where('Branch', 'Alamin Aviele')->where('Current_Status', 'Active')->count();
        
        $staffs = User::
            where('Staff_Status', 'Active')
            ->select('id', 'Staff_ID', 'Fullname', 'Phone_No', 'role', 'Email')
            ->get();

        $students = Student::
            whereIn('Current_Status', ['Active', 'Inactive'])
            ->select('id', 'Student_ID', 'Fullnames', 'Plain_Password', 'Current_Status', 'Student_Pin', 'Current_Balance', 'Student_Class', 'Phone_Number')
            ->get();
        
        return view('home', [
            'iyakpi' => $iyakpi,
            'ogbido' => $ogbido,
            'kogi' => $kogi,
            'elamin' => $elamin,
            'totalStudent' => $totalStudent, 
            'staffs' => $staffs,
            'students' => $students,
        ]);
    }
}