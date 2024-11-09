<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Rute Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rute utama untuk resource student dan students
Route::resource('student', StudentController::class);
Route::resource('students', StudentController::class);

// Rute tambahan dengan prefix 'students'
Route::get('students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::get('students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// Rute tambahan dengan prefix 'student'
Route::get('student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::get('student/{id}', [StudentController::class, 'show'])->name('student.show');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
