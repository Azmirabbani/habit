<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HabitController;

Route::apiResource('users', UserController::class);
Route::apiResource('habits', HabitController::class);

Route::post('/users', [UserController::class, 'store']); // buat user baru

// Kalau mau get habits milik user:
Route::get('users/{user}/habits', [UserController::class, 'show']); // sudah include habits relasi