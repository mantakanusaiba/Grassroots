<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Default route redirects to the login page
Route::get('/', [AuthController::class, 'showLoginForm']);

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard Routes with Middleware
Route::middleware('role:student')->get('/dashboard/student', [DashboardController::class, 'studentDashboard']);
Route::middleware('role:teacher')->get('/dashboard/teacher', [DashboardController::class, 'teacherDashboard']);
Route::middleware('role:admin')->get('/dashboard/admin', [DashboardController::class, 'adminDashboard']);
