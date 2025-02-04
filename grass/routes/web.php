<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;


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
Route::middleware('role:teacher')->group(function () {
    Route::get('/dashboard/teacher', [DashboardController::class, 'teacherDashboard'])->name('teacher.dashboard');
    
    // Teacher Menu Options
    Route::get('/teacher/upload', [TeacherController::class, 'showUploadForm'])->name('teacher.upload');
    Route::post('/teacher/upload', [TeacherController::class, 'uploadFiles'])->name('teacher.uploadFiles');
    Route::get('/teacher/assignments', [TeacherController::class, 'viewAssignments'])->name('teacher.assignments');
    Route::get('/teacher/lectures', [TeacherController::class, 'viewLectures'])->name('teacher.lectures');
    Route::get('/teacher/apply', [TeacherController::class, 'apply'])->name('teacher.apply');
    Route::get('/teacher/apply', [TeacherController::class, 'showApplyForm'])->name('teacher.apply');
    Route::post('/teacher/upload', [TeacherController::class, 'uploadCV'])->name('teacher.upload');
});
