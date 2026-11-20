<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', [StudentController::class, 'showForm'])->name('student.form');

Route::post('/user-form', [StudentController::class, 'handleForm'])->name('student.submit');
