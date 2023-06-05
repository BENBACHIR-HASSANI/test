<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth.inertia')->except(['login', 'login.store', 'forgot-password']);
    // }
    public function create()
    {
        return inertia('Auth/login');
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed',
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
        // ->with('message', 'Administrator logged in successfully');

        // return inertia('index/dashboard');
    }

    public function destroy()
    {
        Auth::logout();
        return Inertia::location(route('login'));

    }
}
