<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', [LaporanController::class, 'form'])->name('lapor.form');
Route::post('/lapor', [LaporanController::class, 'store'])->name('lapor.store');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'daftar'])->name('laporan.index');

    // kalau punya edit / update / delete dari Modul 4, taruh di sini juga
    // Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
    // Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    // Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');

    Route::get('/profil-petugas', [HomeController::class, 'profile'])->name('profil.petugas');
});