<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DosenAuthController;
use App\Http\Controllers\Dosen\KelasController as DosenKelasController;
use App\Http\Controllers\Dosen\MateriController as DosenMateriController;
use App\Http\Controllers\HomeController;
use App\Models\Kelas;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::prefix('dosen')->name('dosen.')->group(function () {
    
    Route::prefix('kelas')->name('kelas.')->group(function () {
        Route::get('/', [DosenKelasController::class, 'index'])->name('index');
        Route::post('/store', [DosenKelasController::class, 'store'])->name('store');
        Route::get('/{kode_kelas}/update', [DosenKelasController::class, 'update'])->name('update');
        Route::post('/{kode_kelas}/delete', [DosenKelasController::class, 'delete'])->name('delete');

        Route::get('/{kode_kelas}', [DosenKelasController::class, 'show'])->name('show');

    });

    Route::prefix('materi')->name('materi.')->group(function () {
        Route::get('/create/{kode_kelas}', [DosenMateriController::class, 'create'])->name('create');
        Route::post('/uploadFile', [DosenMateriController::class, 'uploadFile'])->name('uploadFile');
        Route::post('/store', [DosenMateriController::class, 'store'])->name('store');
    });

});



