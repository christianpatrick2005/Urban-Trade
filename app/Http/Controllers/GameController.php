<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class GameController extends Controller
{
    public function updateSaldo(Request $request)
    {
        $request->validate([
            'saldo' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();
        $user->saldo = $request->saldo;
        $user->save();

        return response()->json(['message' => 'Saldo updated successfully']);
    }
}
