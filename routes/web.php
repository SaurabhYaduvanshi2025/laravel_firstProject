<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student-form', [StudentController::class, 'showForm'])->name('student.form');

Route::post('/student-form', [StudentController::class, 'handleForm'])->name('student.submit');