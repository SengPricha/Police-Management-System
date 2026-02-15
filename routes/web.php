<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OneController;
use App\Http\Controllers\TwoController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\EditController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/dashboard/create', [CreateController::class, 'index'])->name('dashboard.create');
    Route::get('/dashboard/show', [ShowController::class, 'index'])->name('dashboard.show');
    Route::get('/dashboard/edit', [EditController::class, 'index'])->name('dashboard.edit');
    Route::get('/one', [OneController::class, 'index'])->name('staff.one');
    Route::get('/two', [TwoController::class, 'index'])->name('staff.two');
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/leaves', [LeaveController::class, 'index'])->name('leaves.index');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
