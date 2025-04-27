<?php
use Illuminate\Support\Facades\Http;
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
