<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;

class HomepageController extends Controller
{
    public function index()
    {
        $generalInfo = Setup::where('status', 'Active')->first();
        return view('welcome', ['generalInfo' => $generalInfo]);
    }
}
