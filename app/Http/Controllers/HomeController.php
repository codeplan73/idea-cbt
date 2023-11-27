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
        $staffs = User::where('Staff_Status', 'Active')->get();
        $students = Student::whereIn('Current_Status', ['Active', 'Inactive'])->get();
        
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