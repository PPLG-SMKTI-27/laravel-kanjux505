<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;

// halaman portofolio (public)
Route::get('/', [ProjectController::class, 'index']);

// login
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'loginProcess']);

// dashboard (setelah login)
Route::get('/dashboard', [ProjectController::class, 'dashboard']);
