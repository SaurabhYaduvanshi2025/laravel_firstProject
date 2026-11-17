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

Route::view('user-form','user-form');

