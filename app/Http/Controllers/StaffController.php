<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\System;
use App\Models\SystemSetup;

class StaffController extends Controller
{
    /**
     * Display the list of staff.
     */
    public function staffList()
    {
         $systemSetup = SystemSetup::first();
        $staffList = User::
            whereIn('Staff_Status', ['Active', 'Inactive', 'Sacked', 'Resigned'])
            ->select('ID', 'Staff_ID', 'Fullname', 'Phone_No', 'role', 'Staff_Status', 'Email')
            ->get();

        return view('staff.staff-list', ['staffList' => $staffList, 'systemSetup' => $systemSetup]);
    }

    /**
     * Display list of students.
     */
    public function studentList()
    {
         $systemSetup = SystemSetup::first();
        $students = Student::
            whereIn('Current_Status', ['Active', 'Inactive', 'Graduated', 'Left'])
            ->select('ID', 'Student_ID', 'Fullnames', 'Plain_Password', 'Current_Status', 'Student_Pin', 'Current_Balance', 'Student_Class', 'Phone_Number')
            ->get();

        return view('student.student-list', ['students' => $students, 'systemSetup' => $systemSetup]);
    }

    public function create()
    {
         $systemSetup = SystemSetup::first();
        $systems = System::all();
        return view('password.create', ['systems' => $systems, 'systemSetup' => $systemSetup]);
    }

    public function updateStatus(Request $request)
    {    
        $data = $request->validate([
            'class' => ['required'],
            'Current_Status' => ['required'],
        ]);


        if($data['Current_Status'] =='Left' || $data['Current_Status'] == 'Graduated'){
            return back()->with('error', 'You can only set password and active status for Active and Inactive Student');
        }

        // Update password and plain_password for all students
        $affectedRows = Student::where('Student_Class', $data['class'])
        ->whereNotIn('Current_Status', ['Graduated', 'Left'])
        ->update([
            'Current_Status' => $data['Current_Status'],
        ]);

        return redirect('/home')->with('message', 'Students Status Activated Successfully');
            
    }

    public function password()
    {
        $systems = System::all();
         $systemSetup = SystemSetup::first();
        return view('password.password', ['systems' => $systems, 'systemSetup' => $systemSetup]);
    }
    
    public function updateStudentPassword(Request $request)
    {     
        // dd('update password');

        $data = $request->validate([
            'Current_Status' => ['required'],
            'class' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Hash the common password
        $hashedPassword = bcrypt($data['password']);

        if($data['Current_Status'] =='Left' || $data['Current_Status'] == 'Graduated'){
            return back()->with('error', 'You can only set password and active status for Active and Inactive Student');
        }

        // Update password and plain_password for all students
        $affectedRows = Student::where('Student_Class', $data['class'])
        ->whereNotIn('Current_Status', ['Graduated', 'Left'])
        ->update([
            'Current_Status' => $data['Current_Status'],
            'password' => $hashedPassword,
            'plain_password' => $data['password'],
        ]);

        return redirect('/home')->with('message', 'Students Password Updated Successfully');
            
    }

    public function createStaffPassword()
    {
         $systemSetup = SystemSetup::first();
        $systems = System::all();
        return view('staff.create', ['systems' => $systems, 'systemSetup' => $systemSetup]);
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(User $staff)
    {
         $systemSetup = SystemSetup::first();
        $systems = System::all();
        return view('staff.edit', ['staff' => $staff, 'systems' => $systems, 'systemSetup' => $systemSetup]);
    }

    public function updateStaffPassword(Request $request)
    {     
        $data = $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Hash the common password
        $hashedPassword = bcrypt($data['password']);

        // Update password and plain_password for all students
        $affectedRows = User::where('role', 'staff')->update([
            'password' => $hashedPassword,
            'plain_password' => $data['password'],
        ]);

        return redirect('/home')->with('message', 'Staff Password Updated Successfully');
            
    }

    public function update(User $staff, Request $request)
    {
        $staff->Fullname = $request->Fullname;
        $staff->Staff_Status = $request->Staff_Status;
        $staff->role = $request->Staff_role;
        $staff->Phone_No = $request->Phone_No;
        $staff->plain_password = $request->password;
        $staff->password =   bcrypt($request->password);
        
        $staff->update();
        return redirect('/home')->with('message', 'Staff info Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}