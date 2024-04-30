<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Valideer de ingevoerde gegevens
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Probeer de gebruiker in te loggen
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Als de inloggegevens correct zijn, doorsturen naar de juiste locatie
            return redirect()->intended('/dashboard');
        } else {
            // Als de inloggegevens onjuist zijn, doorsturen met een foutmelding
            return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Deze inloggegevens komen niet overeen met onze gegevens']);
        }
    }
}
