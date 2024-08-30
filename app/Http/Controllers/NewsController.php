<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create(): View
    {
        return view('admin.news.create');
    }

    public function edit(Request $req): View
    {
        return view('admin.news.edit', [
            'news' => News::find($req->id),
        ]);
    }

    public function update(Request $req): RedirectResponse
    {
        $req->validate([
            "title" => "bail|required|max:255",
            "content" => "required",
        ]);
        $news = News::find($req->id);
        $news->title = $req->title;
        $news->content = $req->content;
        if ($req->has('thumbnail')) {
            $newName = $req->thumbnail->hashName();
            $thumbnailFolder = public_path() . '/news-thumbnail';

            $req->thumbnail->move($thumbnailFolder, $newName);
            File::delete(public_path() . '/news-thumbnail/' . $news->thumbnail);
            $news->thumbnail = $newName;
        }
        $news->save();
        return redirect('/admin/news');
    }

    public function destroy(Request $req): RedirectResponse
    {
        $news = News::find($req->id);
        File::delete(public_path() . '/news-thumbnail/' . $news->thumbnail);
        News::destroy($news->id);
        return redirect('/admin/news');
    }

    public function store(Request $req): RedirectResponse
    {
        $req->validate([
            "title" => "bail|required|max:255",
            "content" => "required",
            "thumbnail" => "required",
        ]);
        $newName = $req->thumbnail->hashName();
        $thumbnailFolder = public_path() . '/news-thumbnail';

        $req->thumbnail->move($thumbnailFolder, $newName);

        News::query()->create([
            'title' => $req->title,
            'content' => $req->content,
            'thumbnail' => $newName,
        ])->save();

        return redirect('/admin/news');
    }
}
