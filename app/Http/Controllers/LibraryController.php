<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\SystemSetup;
use Illuminate\Http\Request;
use App\Rules\PdfDocValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systemSetup = SystemSetup::first();
        $libraries = Library::all();
        return view('library.index', [
            'libraries' => $libraries,
            'systemSetup' => $systemSetup
        ]);
    }

    /**
     * Display a listing of the resource for student.
     */
    public function studentIndex()
    {
        $systemSetup = SystemSetup::first();
        $libraries = Library::all();
        return view('library-student.index', [
            'libraries' => $libraries,
            'systemSetup' => $systemSetup
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $systemSetup = SystemSetup::first();
        return view('library.create', [ 'systemSetup' => $systemSetup]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $library = new Library;
        $lastLibraryId = Library::latest('library_id')->first();

        if ($lastLibraryId) {
            $newLibraryId =  $lastLibraryId->library_id + 1;
        } else {
            $newLibraryId = 1001;
        }

        $data = $request->validate([
            'name' => 'required',
            'date_' => 'required',
            'library_pdf' => ['required', new PdfDocValidationRule],
        ]); 

        if ($request->hasFile('library_pdf')) {
            $fileName = Str::slug($data['name']) . '.' . $request->file('library_pdf')->getClientOriginalExtension();

            $library_pdf = $request->file('library_pdf');
            $library_Pdf_Path = $library_pdf->storeAs('library_pdf', $fileName, 'public');
        }

        $library->name = $data['name'];
        $library->date_ = $data['date_'];
        $library->library_id = $newLibraryId;
        $library->library_pdf = $library_Pdf_Path;

        $library->save();

        return redirect('/library')->with('message', 'E-Book added to library successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Library $library)
    {
        $systemSetup = SystemSetup::first();
        return view('library.show', ['library' => $library, 'systemSetup' => $systemSetup]);
    }

    /**
     * Display the specified resource.
     */
    public function studentShow(Library $library)
    {
        $systemSetup = SystemSetup::first();
        return view('library-student.show', ['library' => $library, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
        $systemSetup = SystemSetup::first();
        return view('library.edit', [
            'library' => $library,
            'systemSetup' => $systemSetup
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Library $library)
    {
       $data = $request->validate([
            'name' => 'required',
            'date_' => 'required',
            'library_pdf' => [new PdfDocValidationRule],
        ]);     

        if ($request->hasFile('library_pdf')) {
            
            if ($library->library_pdf && Storage::disk('public')->exists($library->library_pdf)) {
                Storage::disk('public')->delete($library->library_pdf);
            }

            $fileName = Str::slug($data['name']) .'.' . $request->file('library_pdf')->getClientOriginalExtension();
            $library_pdf = $request->file('library_pdf');
            $library_Pdf_Path = $library_pdf->storeAs('library_pdf', $fileName, 'public');
        }else {
            // If no new PDF is uploaded, keep the existing file path
            $library_Pdf_Path = $library->library_pdf;
        }

        $library->name = $data['name'];
        $library->date_ = $data['date_'];
        $library->library_pdf = $library_Pdf_Path;

        $library->update();

        return redirect('/library')->with('message', 'E-Book Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        if ($library->library_pdf && Storage::disk('public')->exists($library->library_pdf)) {
            Storage::disk('public')->delete($library->library_pdf);
        }

        $library->delete();

        return back()->with('message', 'Library Item deleted successfully');
    }
}