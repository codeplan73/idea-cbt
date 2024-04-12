<?php

namespace App\Http\Controllers;

use App\Models\Setup;
use Illuminate\Http\Request;
use App\Models\SystemSetup;
use App\Rules\PdfDocValidationRule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SetupController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setups = Setup::all();
         $systemSetup = SystemSetup::first();
        return view('setup.index', ['setups' => $setups, 'systemSetup' => $systemSetup]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $systemSetup = SystemSetup::first();
        return view('setup.create', ['systemSetup' => $systemSetup]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'date' => 'required',
            'setup_pdf' => ['required', new PdfDocValidationRule],
        ]);

        $setup = new Setup;

        if ($request->hasFile('setup_pdf')) {
            $fileName = Str::slug($data['title']) . '.' . $request->file('setup_pdf')->getClientOriginalExtension();
            
            $setup_pdf = $request->file('setup_pdf');
            $setup_Pdf_Path = $setup_pdf->storeAs('setup_pdf', $fileName, 'public');
        }

        $setup->title = $data['title'];
        $setup->status = $data['status'];
        $setup->date = $data['date'];
        $setup->homepage_pdf = $setup_Pdf_Path;
                
        $setup->save();

        return redirect('/setup')->with('message', 'General Info created successfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setup $setup)
    {
         $systemSetup = SystemSetup::first();
        return view('setup.edit', ['setup' => $setup, 'systemSetup' => $systemSetup]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setup $setup)
    {
        $data = $request->validate([
            'title' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);     

        if ($request->hasFile('setup_pdf')) {
            
            if ($setup->setup_pdf && Storage::disk('public')->exists($setup->setup_pdf)) {
                Storage::disk('public')->delete($setup->setup_pdf);
            }

            $fileName = Str::slug($data['title']) . '.' . $request->file('setup_pdf')->getClientOriginalExtension();
            $setup_pdf = $request->file('setup_pdf');
            $setup_Pdf_Path = $setup_pdf->storeAs('setup_pdf', $fileName, 'public');
        }else {
            // If no new PDF is uploaded, keep the existing file path
            $setup_Pdf_Path = $setup->homepage_pdf;
        }

        $setup->title = $data['title'];
        $setup->status = $data['status'];
        $setup->date = $data['date'];
        $setup->homepage_pdf = $setup_Pdf_Path;
        
        $setup->update();

        return redirect('/setup')->with('message', 'General Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setup $setup)
    {
        if (auth()->user()->role != 'admin') {
            abort(403, 'Unauthorized Action');
        }

        if ($setup->setup_pdf && Storage::disk('public')->exists($setup->setup_pdf)) {
            Storage::disk('public')->delete($setup->setup_pdf);
        }

        $setup->delete();

        return back()->with('message', 'E-Book deleted successfully');
    }
}