<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController; 
use App\Http\Controllers\ProfileController;

Route::get('/', [AuthController::class, 'showLoginForm']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('role:student')->get('/dashboard/student', [DashboardController::class, 'studentDashboard'])->name('student.dashboard');

Route::middleware('role:teacher')->get('/dashboard/teacher', [DashboardController::class, 'teacherDashboard']);
Route::middleware('role:admin')->get('/dashboard/admin', [DashboardController::class, 'adminDashboard']);

// Teacher-related routes
Route::middleware('role:teacher')->group(function () {
    Route::get('/teacher/upload', [TeacherController::class, 'showUploadForm'])->name('teacher.upload');
    Route::post('/teacher/upload', [TeacherController::class, 'uploadFiles'])->name('teacher.uploadFiles');
    Route::get('/teacher/assignments', [TeacherController::class, 'viewAssignments'])->name('teacher.assignments');
    Route::get('/teacher/lectures', [TeacherController::class, 'viewLectures'])->name('teacher.lectures');
    Route::get('/teacher/apply', [TeacherController::class, 'showApplyForm'])->name('teacher.apply');
    Route::post('/teacher/upload', [TeacherController::class, 'uploadCV'])->name('teacher.upload');
    
});

Route::get('/teacher/upload', [TeacherController::class, 'showUploadForm'])->name('teacher.upload.form');
Route::post('/teacher/upload/store', [TeacherController::class, 'uploadLecture'])->name('teacher.upload.store');
=======

// Student-related routes
Route::middleware('role:student')->group(function () {
    Route::get('/dashboard/student', [DashboardController::class, 'studentDashboard'])->name('student.dashboard');
    Route::get('/student/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::get('/student/admission', [StudentController::class, 'admission'])->name('student.admission'); 
    Route::post('/student/store', [StudentController::class, 'store'])->name('student.store'); 
    Route::get('/student/lecture', [StudentController::class, 'lecture'])->name('student.lecture');
    Route::get('/student/assignment', [StudentController::class, 'assignment'])->name('student.assignment');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile/upload', [ProfileController::class, 'uploadImage'])->name('profile.upload');
});

