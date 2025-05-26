<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HabitController;

use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);
Route::apiResource('habits', HabitController::class);

// Route::post('/users', [UserController::class, 'store']); 