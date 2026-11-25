<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function(){return view('welcome');});

Route::get('/',function(){return view('home');})->name('home.page');
Route::get('/about-us',function(){return view('about');})->name('about.page');
