<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\System;
use App\Models\SystemSetup;
use Illuminate\Http\Request;
use App\Rules\PdfDocValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $systemSetup = SystemSetup::first();
        return view('books.index', ['books' => $books, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $systemSetup = SystemSetup::first();
        $systems = System::all();
        return view('books.create', ['systems' => $systems, 'systemSetup' => $systemSetup]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $book = new Book;
        $lastBookId = Book::latest('book_id')->first();

        if ($lastBookId) {
            $newBookId =  $lastBookId->book_id + 1;
        } else {
            $newBookId = 101;
        }

        $data = $request->validate([
            'subject' => 'required',
            'class' => 'required',
            'term' => 'required',
            'session' => 'required',
            'book_pdf' => ['required', new PdfDocValidationRule],
        ]);    

        if ($request->hasFile('book_pdf')) {
            $fileName = Str::slug($data['subject']) .'-' .$data['class']. '.' . $request->file('book_pdf')->getClientOriginalExtension();

            $book_pdf = $request->file('book_pdf');
            $book_Pdf_Path = $book_pdf->storeAs('book_pdf', $fileName, 'public');
        }

        $book->staff_id = auth()->user()->Staff_ID;
        $book->subject = $data['subject'];
        $book->class = $data['class'];
        $book->term = $data['term'];
        $book->session = $data['session'];
        $book->book_id = $newBookId;
        $book->book_pdf = $book_Pdf_Path;

        $book->save();

        return redirect('/book')->with('message', 'E-Book created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $systemSetup = SystemSetup::first();
        return view('books.show', ['book' => $book, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $systems = System::all();
         $systemSetup = SystemSetup::first();
        return view('books.edit', [
            'book' => $book,
            'systems' => $systems,
            'systemSetup' => $systemSetup
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {

        // if (auth()->user()->role !== 'admin' || auth()->user()->Staff_ID !== $book->staff_id) {
        //     return redirect('/book')->with('error', 'You do not have permission to perform this action.');
        // }

        $data = $request->validate([
            'subject' => 'required',
            'class' => 'required',
            'term' => 'required',
            'session' => 'required',
            'note_pdf' => [new PdfDocValidationRule],
        ]);     

        if ($request->hasFile('book_pdf')) {
            
            if ($book->book_pdf && Storage::disk('public')->exists($book->book_pdf)) {
                Storage::disk('public')->delete($book->book_pdf);
            }

            $fileName = Str::slug($data['subject']) .'-' .$data['class']. '.' . $request->file('book_pdf')->getClientOriginalExtension();
            $book_pdf = $request->file('book_pdf');
            $book_Pdf_Path = $book_pdf->storeAs('book_pdf', $fileName, 'public');
        }else {
            // If no new PDF is uploaded, keep the existing file path
            $book_Pdf_Path = $book->book_pdf;
        }

        $book->subject = $data['subject'];
        $book->class = $data['class'];
        $book->term = $data['term'];
        $book->session = $data['session'];
        $book->book_pdf = $book_Pdf_Path;

        $book->update();

        return redirect('/book')->with('message', 'E-Book Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // if (auth()->user()->role !== 'admin' || auth()->user()->Staff_ID !== $book->staff_id) {
        //     return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        // }

        if ($book->book_pdf && Storage::disk('public')->exists($book->book_pdf)) {
            Storage::disk('public')->delete($book->book_pdf);
        }

        $book->delete();

        return back()->with('message', 'E-Book deleted successfully');
    }
}