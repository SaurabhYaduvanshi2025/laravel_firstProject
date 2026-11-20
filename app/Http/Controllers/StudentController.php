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
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'course' => 'required|string'
        ]);

        return view('user-form', ['submittedData' => $validatedData]);
    }
}