<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showForm()
    {
        return view('user-form');
    }

    public function handleForm(Request $request)
    {
        // 1. Validation Rules
        $validatedData = $request->validate([
            'name'   => 'required|string|max:100',
            'email'  => 'required|email',
            'gender' => 'required|in:Male,Female,Other',      // Radio Button ke liye
            'skills' => 'required|array|min:1',               // Checkbox ke liye (Array)
            'course' => 'required|string',                    // Dropdown ke liye
        ], [
            // Custom Error Messages (Optional - Industry Practice)
            'gender.required' => 'Please select your gender.',
            'skills.required' => 'Please select at least one skill.',
        ]);

        // 2. Data wapas page par bhejein
        return view('user-form', ['submittedData' => $validatedData]);
    }
}