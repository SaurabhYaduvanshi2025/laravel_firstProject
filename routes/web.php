<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function(){
//     return view('home');
// });

Route::view('/home', 'home');

Route::get('/about', function () {
    return View('about');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/comment', [Controller::class, 'commentsUser']);

Route::get('/name',[Controller::class,'name']);


