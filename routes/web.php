<?php

use App\Http\Controllers\OrderController;
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

Route::get('/pesan', [OrderController::class, 'showOrderForm'])->middleware('auth')->name('pesan');
Route::post('/pesan', [OrderController::class, 'pesan']);

Route::post('/admin/upload', [AdminController::class, 'uploadImage'])->name('admin.upload');

// Admin Routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Kelola Informasi page
    Route::get('/edit/{slug}', [AdminController::class, 'pageInfo'])->name('admin.page');
    Route::post('/edit/{slug}', [AdminController::class, 'updatePageInfo'])->name('admin.page.update');

    // Laporan Pemesanan Tiket
    Route::get('/laporan', [AdminController::class, 'laporanPemesanan'])->name('admin.laporan');

    // User Management
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
});
