<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});

// 👇 This single line replaces ALL 7 job routes
Route::resource('jobs', JobController::class);
