<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PictureController extends Controller
{
    public function index(Request $req): View
    {
        $pictures = Picture::all();
        return view('admin.picture.index', compact("pictures"));
    }

    public function destroy(Request $req): RedirectResponse
    {
        $picture = Picture::find($req->id);
        if ($picture) {
            $path = public_path() . "/pictures/" . $picture->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        Picture::destroy($req->id);
        return redirect('/admin/picture');
    }

    public function store(Request $req): RedirectResponse
    {
        foreach ($req->file('pictures') as $picture) {
            $filename = Date::now() . '_' . $picture->getClientOriginalName();
            Picture::query()->create([
                "image" => $filename,
            ])->save();
            $picture->move(public_path() . "/pictures", $filename);
        }
        return redirect('/admin/picture');
    }
}
