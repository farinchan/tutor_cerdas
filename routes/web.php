<?php

use App\Http\Controllers\Auth\DosenAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('login', [DosenAuthController::class, 'LoginForm'])->name('login');
    Route::post('login', [DosenAuthController::class, 'login'])->name('loginProcess');
    Route::post('logout', [DosenAuthController::class, 'logout'])->name('logout');
    Route::get('register', [DosenAuthController::class, 'registerForm'])->name('register');
    Route::post('register', [DosenAuthController::class, 'register'])->name('registerProcess');
    Route::get('reset-password', [DosenAuthController::class, 'resetPasswordForm'])->name('reset-password');
    Route::post('reset-password', [DosenAuthController::class, 'resetPassword'])->name('reset-passwordProcess');
    Route::get('new-password', [DosenAuthController::class, 'newPasswordForm'])->name('new-password');
    Route::post('new-password', [DosenAuthController::class, 'newPassword'])->name('new-passwordProcess');
});


