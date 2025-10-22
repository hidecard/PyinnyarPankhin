<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

// Guest routes (for non-logged-in users)
Route::middleware('guest')->group(function () {
    // Admin login only
    Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])
        ->name('admin.login');

    Route::post('admin/login', [AdminLoginController::class, 'login'])
        ->name('admin.login.post');
});

// Authenticated routes (for logged-in users)
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])
        ->name('admin.logout');

    // User Management Routes
    Route::resource('admin/users', UserManagementController::class, [
        'as' => 'admin'
    ]);
});
