<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    \App\Jobs\TranslateJob::dispatch();

    return 'Done';
});

Route::view('/', 'home');

Route::get('jobs', [JobController::class, 'index']);
Route::get('jobs/create', [JobController::class, 'create']);
Route::post('jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('jobs/{job}', [JobController::class, 'show']);
Route::get('jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit', 'job');
Route::patch('jobs/{job}', [JobController::class, 'update'])->middleware('auth')->can('edit', 'job');
Route::delete('jobs/{job}', [JobController::class, 'destroy'])->middleware('auth')->can('edit', 'job');

Route::view('contact', 'contact');

Route::view('register', 'auth.register');
Route::post('register', [RegisterController::class, 'store']);
Route::view('login', 'auth.login')->name('login');
Route::post('login', [SessionController::class, 'store']);
Route::post('logout', [SessionController::class, 'destroy']);
