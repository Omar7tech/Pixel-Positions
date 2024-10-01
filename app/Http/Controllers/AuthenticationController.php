<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    // Handle the login logic
    public function login(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view('auth.login');
        } else {
            // Validate the request data
            $validated_data = $request->validate([
                "email" => "required|email",
                "password" => "required"
            ]);

            // Attempt to authenticate the user
            if (!Auth::attempt($validated_data)) {
                return back()->with('credentials', 'Invalid credentials');
            }

            // Redirect to dashboard or desired route after successful login
            return redirect()->route('position.index')->with('success', 'Login successful!');
        }
    }

    // Handle the registration form display and registration logic
    public function register(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('auth.register');
        } else {
            // Validate registration data
            $validated_data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ]);

            // Create the new user
            $user = User::create([
                'name' => $validated_data['name'],
                'email' => $validated_data['email'],
                'password' => Hash::make($validated_data['password']), // Hash the password
            ]);

            // Log the user in after registration
            Auth::login($user);

            // Redirect to dashboard or another route after successful registration
            return redirect()->route('position.index')->with('success', 'Registration successful!');
        }
    }

    // Handle the logout logic
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
