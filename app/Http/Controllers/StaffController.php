<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\System;

class StaffController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function create()
    {
        $systems = System::all();
        return view('password.create', ['systems' => $systems]);
    }

    public function createStaffPassword()
    {
        $systems = System::all();
        return view('staff.create');
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(User $staff)
    {
        $systems = System::all();
        return view('staff.edit', ['staff' => $staff, 'systems' => $systems]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePassword(Request $request)
    {     
        $data = $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'class' => ['required'],
            'Current_Status' => ['required'],
        ]);

        // Hash the common password
        $hashedPassword = bcrypt($data['password']);

        if($data['Current_Status'] =='Left' || $data['Current_Status'] == 'Graduated'){
            return back()->with('error', 'You can only set password and active status for Active and Inactive Student');
        }

        // dd($data['Current_Status']);
        // Update password and plain_password for all students
        $affectedRows = Student::where('Student_Class', $data['class'])
        ->whereNotIn('Current_Status', ['Graduated'])
        ->update([
            'password' => $hashedPassword,
            'plain_password' => $data['password'],
            'Current_Status' => $data['Current_Status'],
        ]);

        return redirect('/home')->with('message', 'Students Password Updated Successfully');
            
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