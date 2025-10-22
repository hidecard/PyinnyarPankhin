<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/academics', [AcademicsController::class, 'index'])->name('academics');
Route::get('/admissions', function () {
    return Inertia::render('Admissions');
})->name('admissions');
Route::get('/department', function () {
    return view('department');
})->name('department');
Route::get('/library', function () {
    return view('library');
})->name('library');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/event', function () {
    return view('event');
})->name('event');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/academic', [AdminController::class, 'academic'])->name('admin.academic');
Route::get('/admin/students', [AdminController::class, 'students'])->name('admin.students');
Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
