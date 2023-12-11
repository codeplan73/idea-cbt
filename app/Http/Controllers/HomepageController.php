<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;
use App\Models\CurrentTerm;


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
}
