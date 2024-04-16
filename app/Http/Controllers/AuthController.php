<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Validation logic here

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Return a success response
        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function login(Request $request)
    {
        // Validation logic here

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken('AuthToken')->plainTextToken;

            // Return token and user role (if needed)
            return response()->json([
                'token' => $token,
                'role' => // Logic to determine user role,
            ]);
        }

        // Return an error response if login fails
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
