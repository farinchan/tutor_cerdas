<?php

use App\Http\Controllers\Auth\DosenAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [DosenAuthController::class, 'login'])->name('login');
Route::post('/login', [DosenAuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/register', [DosenAuthController::class, 'register'])->name('register');
Route::post('/register', [DosenAuthController::class, 'registerProcess'])->name('registerProcess');
Route::get('/logout', [DosenAuthController::class, 'logout'])->name('logout');



