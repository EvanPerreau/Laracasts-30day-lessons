<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->latest()->simplePaginate(8),
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => 'required',
    ]);

    Job::create([
        'title' => request('title'),
        'employer_id' => 1,
        'salary' => request('salary')
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {

    return view('jobs.show', [
        'job' => Job::find($id),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
