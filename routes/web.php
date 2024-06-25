<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Models\Page;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $page = Page::where('slug', 'home')->firstOrFail();
    return view('dynamic', ['filePath' => $page->file_path]);
})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/wisata', function () {
    $page = Page::where('slug', 'wisata')->firstOrFail();
    return view('dynamic', ['filePath' => $page->file_path]);
})->name('wisata');


Route::get('/pesan', function () {
    $page = Page::where('slug', 'pesan')->firstOrFail();
    return view('dynamic', ['filePath' => $page->file_path]);
})->middleware('auth')->name('pesan');
Route::post('/pesan', [OrderController::class, 'pesan']);

Route::post('/admin/upload', [AdminController::class, 'uploadImage'])->name('admin.upload');

// Admin Routes
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Kelola Informasi page
    Route::get('/edit', [AdminController::class, 'editablePages'])->name('admin.editable-pages');
    Route::get('/edit/{slug}', [AdminController::class, 'pageInfo'])->name('admin.page');
    Route::post('/edit/{slug}', [AdminController::class, 'updatePageInfo'])->name('admin.page.update');

    // Laporan Pemesanan Tiket
    Route::get('/report', [AdminController::class, 'orderReport'])->name('admin.report');
    Route::get('/report/{order}/edit', [AdminController::class, 'editReport'])->name('admin.report.edit');
    Route::put('/report/{order}', [AdminController::class, 'updateReport'])->name('admin.report.update');

    // User Management
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/users/{user}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
})->name('dokumentasi');

Route::middleware(['auth'])->group(function () {
    Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
    Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
    Route::post('/forum/{post}/comment', [ForumController::class, 'storeComment'])->name('forum.comment');
});