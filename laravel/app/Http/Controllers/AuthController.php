<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return response()->json(['message' => 'register stub']);
    }

    public function login(Request $request)
    {
        return response()->json(['message' => 'login stub']);
    }

    public function verifyTwoFactor(Request $request)
    {
        return response()->json(['message' => '2fa verify stub']);
    }
}


