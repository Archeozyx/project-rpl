<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/wisata', function () {
    return view('wisata');
})->name('wisata');

Route::get('/pesan', function () {
    return view('pesan');
})->middleware('auth')->name('pesan');

// Admin Routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Kelola Informasi Homepage
    Route::get('/home', [AdminController::class, 'homepageInfo'])->name('admin.home');
    Route::post('/home', [AdminController::class, 'updateHomepageInfo']);

    // Kelola Informasi Page Wisata
    Route::get('/wisata', [AdminController::class, 'wisataInfo'])->name('admin.wisata');
    Route::post('/wisata', [AdminController::class, 'updateWisataInfo']);

    // Kelola Informasi Page Pemesanan Tiket
    Route::get('/pemesanan', [AdminController::class, 'pemesananInfo'])->name('admin.pemesanan');
    Route::post('/pemesanan', [AdminController::class, 'updatePemesananInfo']);

    // Laporan Pemesanan Tiket
    Route::get('/laporan', [AdminController::class, 'laporanPemesanan'])->name('admin.laporan');
});
