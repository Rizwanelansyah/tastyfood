<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Pages
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/news', [PageController::class, 'news']);
Route::get('/gallery', [PageController::class, 'gallery']);

// Admin Pages
Route::middleware('admin')->group(function () {
    Route::get('/admin', [UserController::class, 'admin']);

    // News
    Route::get('/admin/news', [NewsController::class, 'index']);
    Route::get('/admin/news/create', [NewsController::class, 'create']);
    Route::get('/admin/news/edit', [NewsController::class, 'edit']);

    // Inbox
    Route::get('/admin/inbox', [InboxController::class, 'index']);

    // Picture
    Route::get('/admin/picture', [PictureController::class, 'index']);
});

// Login/Logout
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'auth']);

// News
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news', [NewsController::class, 'update']);
Route::delete('/news', [NewsController::class, 'destroy']);

// Inbox
Route::get('/contact', fn () => view('contact'));
Route::post('/inbox', [InboxController::class, 'store']);
Route::delete('/inbox', [InboxController::class, 'destroy']);

// Picture
Route::post('/picture', [PictureController::class, 'store']);
Route::delete('/picture', [PictureController::class, 'destroy']);
