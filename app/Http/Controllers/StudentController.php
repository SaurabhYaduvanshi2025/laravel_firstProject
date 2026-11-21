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
            'comment' => 'required|string|max:50|regex:/^[a-zA-Z0-9\s]+$/',               
        ], [
            
            'gender.required' => 'Please select your gender.',
            'skills.required' => 'Please select at least one skill.',
            'comment.regex'   =>  'Special Character/signs are not allowed in comment.',
            'comment.max'     =>  'Comment cannot exceed 50 Characters.'
        ]);

        
        return view('user-form', ['submittedData' => $validatedData]);
    }
}