<?php

namespace App\Http\Controllers;

use App\Models\SystemSetup;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
         
        return view("cms-about.index", [ 'about' => $about]);
    }
    
    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
        $system = new SystemSetup;

        if ($request->hasFile('school_logo')) {
            if ($system->school_logo && Storage::disk('public')->exists($system->school_logo)) {
                Storage::disk('public')->delete($system->school_logo);
            }
            $school_logo = $request->file('school_logo');
            $logoFileName = 'logo-' . time() . '.' . $school_logo->getClientOriginalExtension();
            $logo_path = $school_logo->storeAs('logo', $logoFileName, 'public');
            $system->school_logo = $logo_path;
        }


        if ( $request->hasFile('school_about_images')) {
            if ($system->school_about_images && Storage::disk('public')->exists($system->school_about_images)) {
                Storage::disk('public')->delete($system->school_about_images);
            }
            $school_about_images = $request->file('school_about_images');
            $aboutFileName = 'about-' . time() . '.' . $school_about_images->getClientOriginalExtension();
            $about_path = $school_about_images->storeAs('about', $aboutFileName, 'public');
            $system->school_about_images = $about_path;
        }


        $system->school_name = $request->school_name;
        $system->school_motto = $request->school_motto;
        $system->school_address = $request->school_address;
        $system->school_email = $request->school_email;
        $system->school_phone = $request->school_phone;
        $system->school_website = $request->school_website;
        $system->school_open_hours = $request->school_open_hours;
        $system->school_close_hours = $request->school_close_hours;
        $system->school_hero_title = $request->school_hero_title;
        $system->school_hero_title_2 = $request->school_hero_title_2;
        $system->school_hero_text = $request->school_hero_text;

        $system->save();
        return back()->with('message', 'System Item added successfully');
    }

    public function storeAbout(Request $request)
    {
        $about = new About;

        if ($request->hasFile('school_logo')) {
            if ($about->school_logo && Storage::disk('public')->exists($about->school_logo)) {
                Storage::disk('public')->delete($about->school_logo);
            }
            $school_logo = $request->file('school_logo');
            $logoFileName = 'logo-' . time() . '.' . $school_logo->getClientOriginalExtension();
            $logo_path = $school_logo->storeAs('logo', $logoFileName, 'public');
            $about->school_logo = $logo_path;
        }


        if ( $request->hasFile('school_about_images')) {
            if ($about->school_about_images && Storage::disk('public')->exists($about->school_about_images)) {
                Storage::disk('public')->delete($about->school_about_images);
            }
            $school_about_images = $request->file('school_about_images');
            $aboutFileName = 'about-' . time() . '.' . $school_about_images->getClientOriginalExtension();
            $about_path = $school_about_images->storeAs('about', $aboutFileName, 'public');
            $about->school_about_images = $about_path;
        }


        $about->school_name = $request->school_name;
        $about->school_motto = $request->school_motto;
        $about->school_address = $request->school_address;
        $about->school_email = $request->school_email;

        $about->save();
        return back()->with('message', 'about Item added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $system = SystemSetup::first()->get();
        return view('cms.edit', compact('system', 'about'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SystemSetup $system)
    {
        if ($request->hasFile('school_logo')) {
            if ($system->school_logo && Storage::disk('public')->exists($system->school_logo)) {
                Storage::disk('public')->delete($system->school_logo);
            }
            $school_logo = $request->file('school_logo');
            $logoFileName = 'logo-' . time() . '.' . $school_logo->getClientOriginalExtension();
            $logo_path = $school_logo->storeAs('logo', $logoFileName, 'public');
            $system->school_logo = $logo_path;
        }


        if ( $request->hasFile('school_about_images')) {
            if ($system->school_about_images && Storage::disk('public')->exists($system->school_about_images)) {
                Storage::disk('public')->delete($system->school_about_images);
            }
            $school_about_images = $request->file('school_about_images');
            $aboutFileName = 'about-' . time() . '.' . $school_about_images->getClientOriginalExtension();
            $about_path = $school_about_images->storeAs('about', $aboutFileName, 'public');
            $system->school_about_images = $about_path;
        }


        $system->school_name = $request->school_name;
        $system->school_motto = $request->school_motto;
        $system->school_address = $request->school_address;
        $system->school_email = $request->school_email;
        $system->school_phone = $request->school_phone;
        $system->school_website = $request->school_website;
        $system->school_open_hours = $request->school_open_hours;
        $system->school_close_hours = $request->school_close_hours;
        $system->school_hero_title = $request->school_hero_title;
        $system->school_hero_title_2 = $request->school_hero_title_2;
        $system->school_hero_text = $request->school_hero_text;

        $system->update();
        
        return back()->with('message', 'System Item added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SystemSetup $system)
    {        
        if ($system->school_logo && Storage::disk('public')->exists($system->school_logo)) {
            Storage::disk('public')->delete($system->school_logo);
        }

        if ($system->school_about_images && Storage::disk('public')->exists($system->school_about_images)) {
            Storage::disk('public')->delete($system->school_about_images);
        }

        $system->delete();

        return back()->with('message', 'System Item deleted successfully');
    }
}