<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InboxController extends Controller
{
    public function store(Request $req): RedirectResponse
    {
        $req->validate([
            'subject' => 'bail|required|max:255',
            'name' => 'bail|required|max:255',
            'email' => 'bail|required|max:255|email|',
            'message' => 'required',
        ]);

        Inbox::query()->create([
            'subject' => $req->subject,
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ])->save();

        return redirect()->back();
    }

    public function destroy(Request $req): RedirectResponse
    {
        Inbox::destroy($req->id);
        return redirect('/admin/inbox');
    }

    public function index(): View
    {
        return view('admin.inbox.index', ['inboxes' => Inbox::all()]);
    }
}
