<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function login(Request $req): View | RedirectResponse
    {
        if (Auth::user()) {
            return back();
        }
        return view('login');
    }

    public function logout(Request $req): RedirectResponse
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect('/login');
    }

    public function auth(Request $req): RedirectResponse
    {
        $req->validate([
            'email' => 'bail|email|required',
            'password' => 'required',
        ]);
        if (!Auth::attempt($req->only('email', 'password'))) {
            return redirect('/login')
                ->withErrors([
                    'msg' => 'Email or Password wrong!'
                ])->withInput();
        }
        return redirect('/');
    }

    public function admin(Request $req): View
    {
        return view('admin.dashboard');
    }
}
