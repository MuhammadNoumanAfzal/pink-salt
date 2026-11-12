<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Login successful! Redirecting to admin dashboard...',
                    'redirect' => route('admin.dashboard')
                ]);
            }

            return redirect()->intended(route('admin.dashboard'));
        }

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Login successful! Redirecting to admin dashboard...',
                'redirect' => route('admin.dashboard')
            ]);
                'success' => false,
                'message' => 'Invalid email or password credentials provided.'
            ], 401);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid email or password credentials provided.'
        ], 401);
        return back()->withErrors([
            'email' => 'Invalid email or password credentials provided.'
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        try {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        } catch (\Throwable $e) {}

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}
