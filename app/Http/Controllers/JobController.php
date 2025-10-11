<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show create form
    public function create()
    {
        return view('jobs.create');
    }

    // Store a new job
    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // Create new job
        Job::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => 1 // Hard-coded for now
        ]);

        // Redirect
        return redirect('/jobs');
    }

    // Show a single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show edit form
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update a job
    public function update(Request $request, Job $job)
    {
        // Validation
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // Update job
        $job->update([
            'title' => $validated['title'],
            'salary' => $validated['salary']
        ]);

        // Redirect
        return redirect('/jobs/' . $job->id);
    }

    // Delete a job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
