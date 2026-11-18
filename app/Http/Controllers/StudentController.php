<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 1. Form page dikhane ke liye
    public function showForm()
    {
        return view('form');
    }

    // 2. Form submit hone par data receive karke wapas page par bhejne ke liye
    public function handleForm(Request $request)
    {
        // Basic validation (Industry practice)
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'course' => 'required|string'
        ]);

        // Bina DB mein save kiye data ko wapas usi view ('form') par bhej rahe hain
        return view('form', ['submittedData' => $validatedData]);
    }
}