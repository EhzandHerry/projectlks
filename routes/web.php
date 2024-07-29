<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\LksController;
use Illuminate\Support\Facades\Route;

// Rute untuk landing page dan login
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('landing');
    })->name('landing');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
});
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk admin dashboard dan pendaftaran operator dan LKS
Route::middleware(['auth', 'check.role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('admin/register', [AdminController::class, 'register'])->name('admin.register.post');
    Route::get('admin/edit/{user}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('admin/update/{user}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('admin/delete/{user}', [AdminController::class, 'delete'])->name('admin.delete');
});
// Rute untuk operator dashboard
Route::middleware(['auth', 'check.role:operator'])->group(function () {
    Route::get('operator/dashboard', [OperatorController::class, 'dashboard'])->name('operator.dashboard');
});

// Rute untuk LKS dashboard
Route::middleware(['auth', 'check.role:lks'])->group(function () {
    Route::get('lks/dashboard', [LksController::class, 'dashboard'])->name('lks.dashboard');
});
