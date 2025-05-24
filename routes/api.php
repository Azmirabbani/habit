<?php

use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;

Route::apiResource('habits', HabitController::class);
