<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('userinterface.login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {

        if (Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ], $request->filled('remember'))) {
            // Tambahkan debug:
            Log::info('Login berhasil: ' . Auth::user()->username);
            return redirect()->route('home');
        }


        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba login pengguna dengan username dan password
        if (Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ], $request->filled('remember'))) {
            // Jika login berhasil, redirect ke halaman yang diinginkan
            return redirect()->route('home');
        }

        Log::warning('Login gagal untuk username: ' . $request->input('username'));

        // Jika login gagal, kembalikan error
        return back()->withErrors([
            'username' => 'Username atau password tidak valid.',
        ]);
    }

    /**
     * Logout the user and redirect to the login page.
     */
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect()->route('login'); // Redirect ke halaman login
    }

    /**
     * Home page after login
     */
    public function home()
    {
        
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Pastikan data pengguna sudah ada
        if (!$user) {
            return redirect()->route('login');
        }

        return view('userinterface.home', compact('user'));
    }
}
