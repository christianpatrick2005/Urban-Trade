<?php

use App\Http\Controllers\transaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;

// Halaman Register
Route::get('register', function () {
    return view('userinterface/register');
})->name('register');

// Proses Register
Route::post('register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/', function () {
    return view('userinterface/login');
});

Route::get('register', function () {
    return view('userinterface/register');
})->name('register');

// Route for login form
Route::get('login', [HomeController::class, 'showLoginForm'])->name('login');

// Route to handle login
Route::post('login', [HomeController::class, 'login'])->name('login.submit');

Route::get('home', function () {
    return view('userinterface/home');
})->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('chart', function () {
    return view('chart-css');
});

Route::get('trading', function () {
    return view('userinterface/trading');
});

// Route::get('donasi', function () {
//     return view('donasi');
// });

// Route::get('/','transaksiController@index') -> name('index');
// Route::get('/', [transaksiController::class, 'index'])->name('index');

// Route::post('/proccess', [transaksiController::class, 'proccess'])->name('proccess');


