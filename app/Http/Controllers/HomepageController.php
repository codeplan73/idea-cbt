<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setup;

class HomepageController extends Controller
{
    public function index()
    {
        $generalInfo = Setup::first();
        return view('welcome', ['generalInfo' => $generalInfo]);
    }
}
