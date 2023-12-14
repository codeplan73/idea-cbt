<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\CurrentTerm;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;


class HomepageController extends Controller
{
    public function index()
    {
        $latestTerm = CurrentTerm::latest()->first();
        $generalInfo = Setup::where('status', 'Active')->first();
        return view('welcome', [
            'generalInfo' => $generalInfo,
            'latestTerm' => $latestTerm,
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
        Mail::to('globeraven.cps@gmail.com')->send(new ContactUsMail($data));

        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
}
