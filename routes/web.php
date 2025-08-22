<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home → redirect to login
Route::get('/', [UserController::class, 'showLogin'])->name('home');

// Show login + handle login
Route::get('/login', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

// Show register + handle register
Route::get('/register', [UserController::class, 'showRegister'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

// Dashboard (only logged in users)

Route::get('/dashboard',[UserController::class, 'DashboardPage'])->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


