<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Student routes
Route::resource('students', StudentController::class);
