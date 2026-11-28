<?php

use Illuminate\Support\Facades\Route;

// Public Route (Bina middleware ke)
Route::get('/', fn () => view('welcome'))->name('home.page');

// Keep the shorter dashboard URL available as well.
Route::get('/dashboard', fn () => view('dashboard'))
    ->middleware('age.check')
    ->name('dashboard.page');

// Protected Admin Group (Prefix + Middleware + Named Routes ek saath)
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['age.check']) // Ek se zyada ke liye: ['auth', 'age.check']
    ->group(function () {

        // URL: /admin/dashboard | Name: admin.dashboard
        Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

        // URL: /admin/users | Name: admin.users
        Route::get('/users', fn () => view('users'))->name('users');
    });
