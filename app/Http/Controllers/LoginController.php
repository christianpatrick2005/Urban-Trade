<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password'); // Get username and password

        // Attempt login with username and password
        if (Auth::attempt($credentials)) {
            // If successful, redirect to home
            return redirect()->route('home');
        }

        // If authentication fails, redirect back with error
        return back()->withErrors(['error' => 'Invalid username or password']);
    }

    // Logout user
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
