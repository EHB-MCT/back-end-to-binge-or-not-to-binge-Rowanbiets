<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Video;

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

            $user = Auth::user();
            $favoriteVideoIds = $user->favorites()->pluck('videos.id')->toArray(); // Geef 'videos.id' aan als alias voor de id-kolom van de video's
            $videos = Video::whereNotIn('id', $favoriteVideoIds)->get(); // Haal video's op die nog niet aan favorieten zijn toegevoegd
            return view('welcome', compact('videos'));
        } else {
            // Als de inloggegevens onjuist zijn, doorsturen met een foutmelding
            return back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'Deze inloggegevens komen niet overeen met onze gegevens']);
        }
    }

}
