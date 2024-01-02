<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\File;

class VideoValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Check if the file is a PDF or DOC file
        $allowedExtensions = ['mp4', 'WebM', 'Ogg', 'AVI', 'MKV', 'FLV', 'MOV'];
        $extension = File::extension($value->getClientOriginalName());
        return in_array(strtolower($extension), $allowedExtensions);
    }

    public function message()
    {
        return 'The :attribute must be a valid mp4, WebM, Ogg, AVI, MKV, FLV, MOV file.';
    } 
}