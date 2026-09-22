<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HashController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::view('/', 'pages.home')->name('home');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('throttle:login');

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('throttle:6,1');
});

Route::middleware('auth')->group(function () {
    Route::get('/breaker', [HashController::class, 'create'])->name('breaker');

    Route::get('/new-job', [HashController::class, 'newJob'])->name('new-job');

    Route::get('/create-new-job', [HashController::class, 'newJob'])->name('create-new-job');

    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    // Route::get('/easterEgg', 'easterEgg')->name('easter-egg');
});
