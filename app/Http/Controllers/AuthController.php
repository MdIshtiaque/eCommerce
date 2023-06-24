<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $post_data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $post_data['name'],
            'email' => $post_data['email'],
            'password' => bcrypt($post_data['password']),
        ]);

        $token = $user->createToken('authToken')->plainTextToken;
        flash()->addSuccess('Your have successfully done your registration.');
        return response()->json([
            'success' => true
        ]);
    }

    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            flash()->addSuccess('Your have successfully logged in.');
            return response()->json([
                'success' => true
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        Session::invalidate();
        flash()->addSuccess('Your have successfully logged out.');
        return response()->json(['message' => 'Logged out successfully', 'success' => true]);
    }
}
