<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
// This single line of code sets up all the necessary routes for user authentication, including login, registration, logout, and password reset.

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
