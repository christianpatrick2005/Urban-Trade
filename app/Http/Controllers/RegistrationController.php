<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|string|min:8|max:12',
            'bank_account' => 'required|string|min:10|max:16',
            'account_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
        ]);

        // Simpan data ke database menggunakan mass-assignment
        User::create([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
            'bank_account' => $validatedData['bank_account'],
            'account_name' => $validatedData['account_name'],
            'email' => $validatedData['email'],
            'saldo' => 0,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('home')->with('message', 'Registration successful!');
    }
}
