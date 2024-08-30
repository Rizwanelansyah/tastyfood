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

    public function register(Request $req): View
    {
        return view('register');
    }

    public function store(Request $req): RedirectResponse
    {
        $req->validate([
            'email' => 'bail|required|email',
            'username' => 'bail|required|min:5|max:255',
            'password' => 'bail|required|min:8',
            'confirm_password' => 'bail|required',
        ]);
        if ($req->password !== $req->confirm_password) {
            return redirect('/register')->withErrors([
                'msg' => 'Password didn\'t match try again',
            ])->withInput();
        }
        if (User::query()->make([
            'email' => $req->email,
            'name' => $req->username,
            'password' => Hash::make($req->password),
            'type' => 'user',
        ])->save()) {
            return redirect('/login')->with('msg', 'New user created, you can login now!');
        } else {
            return redirect('/register')->withErrors([
                'msg' => "Something went wrong, cannot create new user"
            ])->withInput();
        }
    }

    public function admin(Request $req): View
    {
        return view('admin.dashboard');
    }
}
