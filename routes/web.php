<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $news = News::all();
    $news_count = $news->count();
    $pictures = File::files(public_path() . '/pictures');
    $pictures_count = count($pictures);
    $rand_pictures = [];
    if ($pictures_count < 7) {
        $rand_pictures = $pictures;
    } else {
        $keys = array_rand($pictures, $pictures_count > 6 ? 6 : $pictures_count);
        foreach ($keys as $key) {
            $rand_pictures[] = $pictures[$key];
        }
    }
    return view('home', [
        'news' => $news->random($news_count > 5 ? 5 : $news_count)->collect(),
        'pictures' => $rand_pictures,
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
Route::get('/gallery', function() {
    $pictures = File::files(public_path() . '/pictures');
    $pictures_count = count($pictures);
    $rand_pictures = [];
    if ($pictures_count < 13) {
        $rand_pictures = $pictures;
    } else {
        $keys = array_rand($pictures, $pictures_count > 12 ? 12 : $pictures_count);
        foreach ($keys as $key) {
            $rand_pictures[] = $pictures[$key];
        }
    }
    return view('gallery', [
        'pictures' => $rand_pictures,
    ]);
});

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

// Picture
Route::post('/picture', [PictureController::class, 'store']);
Route::delete('/picture', [PictureController::class, 'destroy']);
