<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\SuspendController;
use App\Http\Controllers\OneController;
use App\Http\Controllers\TwoController;
use App\Http\Controllers\RetirementController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\EvictionController;
use App\Http\Controllers\DisabledController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/dashboard/create', 'create')->name('dashboard.create');
        Route::get('/dashboard/show', 'show')->name('dashboard.show');
        Route::get('/dashboard/edit', 'edit')->name('dashboard.edit');
    });

    Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('/one', [OneController::class, 'index'])->name('staff.one');
    Route::get('/two', [TwoController::class, 'index'])->name('staff.two');
    Route::get('/folder', [FolderController::class, 'index'])->name('folder.index');
    Route::get('/retirement', [RetirementController::class, 'index'])->name('retirement.index');
    Route::get('/death', [DeathController::class, 'index'])->name('death.index');
    Route::get('/transfer', [TransferController::class, 'index'])->name('transfer.index');
    Route::get('/eviction', [EvictionController::class, 'index'])->name('eviction.index');
    Route::get('/disabled', [DisabledController::class, 'index'])->name('disabled.index');
    Route::get('/discipline', [DisciplineController::class, 'index'])->name('discipline.index');
    Route::get('/study', [StudyController::class, 'index'])->name('study.index');
    Route::get('/suspend', [SuspendController::class, 'index'])->name('suspend.index');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
