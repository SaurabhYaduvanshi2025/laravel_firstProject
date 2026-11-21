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
        $validatedData = $request->validate([
            'name'   => 'required|string|max:100',
            'email'  => 'required|email',
            'gender' => 'required|in:Male,Female,Other',      
            'skills' => 'required|array|min:1',               
            'course' => 'required|string',                    
        ], [
            
            'gender.required' => 'Please select your gender.',
            'skills.required' => 'Please select at least one skill.',
        ]);

        
        return view('user-form', ['submittedData' => $validatedData]);
    }
}