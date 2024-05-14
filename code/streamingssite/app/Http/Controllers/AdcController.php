<?php

namespace App\Http\Controllers;

use App\Models\ChampionTierList;
use Illuminate\Http\Request;
use App\Models\Video;

class ADCController extends Controller
{
    public function index(Request $request)
    {
        // Filter videos voor de Jungle-rol
        $adcVideos = Video::where('role', 'ADC')->get();

        // Haal de tierlist op voor de Jungle-rol
        $adcChampions = ChampionTierList::where('role', 'ADC')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('ADC.index', compact('adcVideos', 'adcChampions'));
    }

    // Andere methoden kunnen worden toegevoegd indien nodig...
}
