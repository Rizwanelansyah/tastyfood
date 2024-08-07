<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Models\News;

Route::get('/', function () {
    $news = News::all();
    $news_count = $news->count();
    return view('home', [
        'news' => $news->random($news_count > 5 ? 5 : $news_count)->collect(),
    ]);
});
Route::get('/about', fn () => view('about'));
Route::get('/news', function () {
    $news = News::all();
    $news_count = $news->count();
    return view('news', [
        'news' => $news->random($news_count > 8 ? 8 : $news_count)->collect(),
    ]);
});
Route::get('/gallery', fn () => view('gallery'));

// News
Route::post('/news', [NewsController::class, 'store']);
Route::put('/news', [NewsController::class, 'update']);
Route::delete('/news', [NewsController::class, 'destroy']);
Route::get('/admin/news', [NewsController::class, 'index']);
Route::get('/admin/news/create', [NewsController::class, 'create']);
Route::get('/admin/news/edit', [NewsController::class, 'edit']);

// Inbox
Route::get('/contact', fn () => view('contact'));
Route::get('/admin/inbox', [InboxController::class, 'index']);
Route::post('/inbox', [InboxController::class, 'store']);
Route::delete('/inbox', [InboxController::class, 'destroy']);
