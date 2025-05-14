<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

public function boot()
{
    // login menggunakan username bukan email
    Auth::viaRequest('custom-user-provider', function ($request) {
        $user = \App\Models\User::where('username', $request->username)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            return $user;
        }
        return null;
    });
}
