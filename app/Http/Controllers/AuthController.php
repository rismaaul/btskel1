<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use App\Models\auth as User;


class AuthController extends Controller
{
    public function index()
    {
        //
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard'); // Change the redirect path as needed
        }

        // Authentication failed
        return back()->withErrors(['username' => 'Invalid login credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
