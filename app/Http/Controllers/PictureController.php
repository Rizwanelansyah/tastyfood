<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PictureController extends Controller
{
    public function index(Request $req): View
    {
        $pictures = File::files(public_path() . "/pictures");
        return view('admin.picture.index', compact("pictures"));
    }

    public function destroy(Request $req): RedirectResponse
    {
        $path = public_path() . '/pictures/' . $req->filename;
        if (File::exists($path)) {
            File::delete($path);
        }
        return redirect('/admin/picture');
    }

    public function store(Request $req): RedirectResponse
    {
        foreach ($req->file('pictures') as $picture) {
            $filename = Date::now() . '_' . $picture->getClientOriginalName();
            $picture->move(public_path() . "/pictures", $filename);
        }
        return redirect('/admin/picture');
    }
}
