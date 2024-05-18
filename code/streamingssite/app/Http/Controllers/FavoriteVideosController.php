<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class FavoriteVideosController extends Controller
{

    public function index()
    {
        // Haal de ingelogde gebruiker op
        $user = auth()->user();

        // Controleer of er een gebruiker is ingelogd
        if ($user) {
            // Haal de favoriete video's van de gebruiker op
            $favoriteVideos = $user->favorites()->get();
            $rolePercentages = $this->getRolePercentage(); // Roep de methode aan om de rolpercentages op te halen

            // Geef de favorietenpagina weer met de favoriete video's
            return view('favorites.index', compact('favoriteVideos', 'rolePercentages'));
        } else {
            // Als er geen gebruiker is ingelogd, stuur de gebruiker door naar de inlogpagina
            return redirect()->route('login')->with('error', 'Je moet ingelogd zijn om je favoriete video\'s te bekijken.');
        }
    }

    public function removeFromFavorites(Request $request, Video $video)
    {


        $user = auth()->user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Je moet ingelogd zijn om favoriete video\'s te verwijderen.'], 401);
        }

        try {
            // Controleer eerst of de video aanwezig is in de favorieten van de gebruiker
            if ($user->favorites()->where('video_id', $video->id)->exists()) {
                // Verwijder de video uit favorieten
                $user->favorites()->detach($video->id);
                return redirect()->route('favorite.index')->with('success', 'Video is succesvol verwijderd uit favorieten!');
            } else {
                // Als de video niet in de favorieten van de gebruiker staat, geef een foutmelding terug
                return response()->json(['success' => false, 'message' => 'Deze video staat niet in je favorieten.'], 404);
            }
        } catch (\Exception $e) {
            // Log de foutmelding voor verdere analyse
            \Log::error('Fout bij het verwijderen uit favorieten: ' . $e->getMessage());
            // Geef een algemene foutmelding terug
            return response()->json(['success' => false, 'message' => 'Er is een fout opgetreden bij het verwerken van het verzoek. Probeer het later opnieuw.'], 500);
        }
    }


    public function addToFavorites(Request $request, Video $video)
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Je moet ingelogd zijn om favoriete video\'s toe te voegen.'], 401);
        }

        try {
            if ($user->favorites()->where('video_id', $video->id)->exists()) {
                // Verwijder video uit favorieten
                $user->favorites()->detach($video->id);
                return response()->json(['success' => true, 'video' => $video]);
            } else {
                // Voeg video toe aan favorieten
                $user->favorites()->attach($video->id);
                return redirect()->back()->with('success', 'Video is succesvol toegevoegd aan favorieten!');
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Er is een fout opgetreden bij het verwerken van het verzoek. Probeer het later opnieuw.'], 500);
        }
    }

    public function getRolePercentage()
    {
        $user = auth()->user();
        $favoriteVideos = $user->favorites()->get();

        $roleCounts = $favoriteVideos->groupBy('role')->map->count();

        $totalVideos = $favoriteVideos->count();

        $rolePercentages = $roleCounts->map(function ($count) use ($totalVideos) {
            return round(($count / $totalVideos) * 100, 2);
        });

        return $rolePercentages;
    }

    public static function getColorForRole($role): string
    {
        switch ($role) {
            case 'Top':
                return '#1e8e3e'; // Groen
            case 'Jungle':
                return '#6f42c1'; // Paars
            case 'Mid':
                return '#964B00'; // Blauw
            case 'ADC':
                return '#f66a0a'; // Oranje
            case 'Support':
                return '#f2d600'; // Geel
            default:
                return '#cccccc'; // Standaardkleur voor onbekende rollen
        }
    }

}
