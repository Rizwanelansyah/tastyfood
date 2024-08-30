<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\News;

Route::get('/', function () {
    $news = News::all();
    $news_count = $news->count();
    return view('home', [
        'news' => $news->random($news_count > 5 ? 5 : $news_count)->collect(),
    ]);
});
Route::view('/about', 'about');
Route::get('/news', function () {
    $news = News::all();
    $news_count = $news->count();
    return view('news', [
        'news' => $news->random($news_count > 8 ? 8 : $news_count)->collect(),
    ]);
});
Route::view('/gallery', 'gallery');

Route::middleware('admin')->group(function () {
    Route::get('/admin', [UserController::class, 'admin']);

    // News
    Route::get('/admin/news', [NewsController::class, 'index']);
    Route::get('/admin/news/create', [NewsController::class, 'create']);
    Route::get('/admin/news/edit', [NewsController::class, 'edit']);

    // Inbox
    Route::get('/admin/inbox', [InboxController::class, 'index']);
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'auth']);
Route::post('/register', [UserController::class, 'store']);

// News
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news', [NewsController::class, 'update']);
Route::delete('/news', [NewsController::class, 'destroy']);

// Inbox
Route::get('/contact', fn () => view('contact'));
Route::post('/inbox', [InboxController::class, 'store']);
Route::delete('/inbox', [InboxController::class, 'destroy']);
