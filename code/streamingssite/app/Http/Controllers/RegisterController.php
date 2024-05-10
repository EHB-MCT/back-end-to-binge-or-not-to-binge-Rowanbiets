<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin', // Voeg validatieregels toe voor de rol
        ]);

        // Creëer de gebruiker met de juiste rol
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Wijs de juiste rol toe
        $user->assignRole($request->role);

        // Redirect de gebruiker naar een bepaalde locatie na registratie
        return redirect()->route('login')->with('success', 'Registratie voltooid! U kunt nu inloggen.');
    }
}
