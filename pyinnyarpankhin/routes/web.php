<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RoleManagementController;

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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

    // User Management Routes
    Route::resource('admin/users', UserManagementController::class, ['as' => 'admin']);

    // Role Management Routes
    Route::resource('admin/roles', RoleManagementController::class, ['as' => 'admin']);
    Route::post('admin/roles/assign', [RoleManagementController::class, 'assignRole'])->name('admin.roles.assign');
    Route::post('admin/roles/remove', [RoleManagementController::class, 'removeRole'])->name('admin.roles.remove');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
