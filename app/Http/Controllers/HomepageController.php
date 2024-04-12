<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\CurrentTerm;
use App\Models\SystemSetup;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;


class HomepageController extends Controller
{
    public function index()
    {
        $systemSetup = SystemSetup::first();
        $latestTerm = CurrentTerm::latest()->first();
        $generalInfo = Setup::where('status', 'Active')->first(); 
        return view('welcome', [
            'generalInfo' => $generalInfo,
            'latestTerm' => $latestTerm,
            'systemSetup' => $systemSetup
        ]);
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();
        Mail::to('aamin.hira@gmail.com')->send(new ContactUsMail($data));

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}