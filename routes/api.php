<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return ['message' => 'pong'];
});

Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->user();
});

Route::post('callback', 'transaksi@callback') -> name('callback');
