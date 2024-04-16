<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Signup Route
Route::post('signup', [AuthController::class, 'signup']);

// Login Route
Route::post('login', [AuthController::class, 'login']);
