<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentBookController extends Controller
{
    public function index()
    {
        $student_class = Auth::guard('student')->user()->Student_Class;
        $books = Book::where('class', $student_class)->latest()->get();

        return view('classbook.index', ['books' => $books]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('classbook.show', ['book' => $book]);
    }
}