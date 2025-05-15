<?php
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\transaksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('userinterface/login');
})->name('login');

// Form Register & Proses
Route::get('/register', function () {
    return view('userinterface.register');
})->name('register');

Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

// Form Login & Proses
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::post('/login', [HomeController::class, 'login'])->name('login.submit');

// Halaman Home (setelah login)
Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');

// Logout
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('profile', function () {
    return view('userinterface/profile');
})->middleware('auth');

Route::get('editprofile', function () {
    return view('userinterface/editprofile');
})->name('editprofile');

Route::get('chart', function () {
    return view('chart-css');
});

Route::get('trading', function () {
    return view('userinterface/trading');
});

Route::get('market', function () {
    return view('userinterface/markets');
});

// Route::get('/','transaksiController@index') -> name('index');
Route::get('donasi', [transaksiController::class, 'index'])->name('index');

Route::post('/proccess', [transaksiController::class, 'proccess'])->name('proccess');

Route::get('/api/crypto', function () {
    $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
        'vs_currency' => 'idr',
        // 'ids' => 'bitcoin,ethereum,solana,cardano,dogecoin,binancecoin,ripple,polkadot,tron,litecoin',
        'order' => 'market_cap_desc',
        'per_page' => 5,
        'page' => 1,
        'sparkline' => false
    ]);

    return $response->json();
});

Route::get('/api/market', function () {
    $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
        'vs_currency' => 'idr',
        // 'ids' => 'bitcoin,ethereum,solana,cardano,dogecoin,binancecoin,ripple,polkadot,tron,litecoin',
        'order' => 'market_cap_desc',
        'per_page' => 50,
        'page' => 1,
        'sparkline' => false
    ]);

    return $response->json();
});

Route::get('/api/bitcoin', function () {
    $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
        'ids' => 'bitcoin',
        'vs_currencies' => 'idr'
    ]);

    return $response->json();
});
