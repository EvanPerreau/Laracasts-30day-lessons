<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::view('contact', 'contact');

Route::view('register', 'auth.register');
Route::post('register', [RegisterController::class, 'store']);
Route::view('login', 'auth.login');
Route::post('login', [RegisterController::class, 'store']);
