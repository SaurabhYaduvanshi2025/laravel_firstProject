<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function(){
//     return view('home');
// });

Route::view('/home','home');

Route::get('/about',function(){
    return View('about');
});

use App\Http\Controllers\UserController;

Route::get('/user',function(){
    return view('user');
});