<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the login form.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {
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
        $user = Auth::user(); // Dapatkan pengguna yang sedang login

        // Pastikan data pengguna sudah ada
        if (!$user) {
            return redirect()->route('login'); // Jika tidak ada pengguna yang login, redirect ke login page
        }

        // Debug: Pastikan data pengguna sudah benar
        dd($user); // Ini akan menampilkan data pengguna yang login

        return view('home', compact('user')); // Kirim data pengguna ke view 'home'
    }
}
