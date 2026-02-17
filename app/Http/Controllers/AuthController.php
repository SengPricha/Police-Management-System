<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Validation
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Username ឬ Password មិនត្រឹមត្រូវ'
            ], 401);
        }

        $user = User::where('username', $request->username)->first();
        $token = $user->createToken('admin_token')->plainTextToken;

        return response()->json([
            'message' => 'Login ជោគជ័យ!',
            'token' => $token,
            'user' => $user
        ]);
    }
}
