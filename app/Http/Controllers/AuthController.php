<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the registration form
     */
    public function register()
    {
        return view("auth.register");
    }

    /**
     * Show the login form
     */
    public function login()
    {
        return view("auth.login");
    }

    /**
     * Handle an incoming registration request
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:8|confirmed",
            "password_confirmation" => "required|string|min:8",
        ]);

        $user = new User();

        $user->fill($credentials);
        $user->password = Hash::make($credentials["password"]);
        $user->save();

        auth()->login($user);

        return redirect()->route('/');
    }

    /**
     * Handle an authentication attempt
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required|email|exists:users,email",
            "password" => "required|string"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle the logout event
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
