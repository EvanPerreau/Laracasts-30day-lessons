<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->simplePaginate(8),
    ]);
});


Route::get('/jobs/{id}', function ($id) {

    return view('job', [
        'job' => Job::find($id),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
