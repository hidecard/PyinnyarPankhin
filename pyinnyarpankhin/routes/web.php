<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\RoleManagementController;
use App\Http\Controllers\DurationController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\EventController;

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
    Route::get('/admin/academic', [AdminController::class, 'academic'])->name('admin.academic');
    Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');

    // User Management Routes
    Route::resource('admin/users', UserManagementController::class, ['as' => 'admin']);

    // Role Management Routes
    Route::resource('admin/roles', RoleManagementController::class, ['as' => 'admin']);
    Route::post('admin/roles/assign', [RoleManagementController::class, 'assignRole'])->name('admin.roles.assign');
    Route::post('admin/roles/remove', [RoleManagementController::class, 'removeRole'])->name('admin.roles.remove');

    // Academic Management Routes
    Route::resource('admin/durations', DurationController::class, ['as' => 'admin']);
    Route::resource('admin/degrees', DegreeController::class, ['as' => 'admin']);
    Route::resource('admin/departments', DepartmentController::class, ['as' => 'admin']);
    Route::resource('admin/majors', MajorController::class, ['as' => 'admin']);
    Route::resource('admin/faculties', FacultyController::class, ['as' => 'admin']);
    Route::resource('admin/events', EventController::class, ['as' => 'admin']);
    Route::patch('admin/events/{event}/toggle', [EventController::class, 'toggle'])->name('admin.events.toggle');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
