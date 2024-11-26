<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $news = News::all()->sortByDesc('created_at');
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
    }

    public function about(): View
    {
        return view('about');
    }

    public function news(): View
    {
        $news = News::all();
        $news_count = $news->count();
        return view('news', [
            'news' => $news->random($news_count > 8 ? 8 : $news_count)->collect(),
        ]);
    }

    public function gallery(): View
    {
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
    }
}
