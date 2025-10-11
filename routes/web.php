<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [ // Changed
        'jobs' => \App\Models\Job::with('employer')->paginate(10)
    ]);
});

// Show Create Form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (\App\Models\Job $job) {
    return view('jobs.show', ['job' => $job]); // Changed
});

// Store a New Job
Route::post('/jobs', function () {
    // Validation logic will go here
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    \App\Models\Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1 // Hard-coded for now
    ]);
    return redirect('/jobs');
});


// Show Edit Form
Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {
    return view('jobs.edit', [
        'job' => $job
    ]);
});

// Update a Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
    // Validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // Update
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // Redirect
    return redirect('/jobs/' . $job->id);
});

// Destroy a Job
Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});

