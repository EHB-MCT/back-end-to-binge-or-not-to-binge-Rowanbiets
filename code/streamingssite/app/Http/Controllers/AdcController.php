<?php

namespace App\Http\Controllers;

use App\Models\ChampionTierList;
use Illuminate\Http\Request;
use App\Models\Video;

class AdcController extends Controller
{
    public function index(Request $request)
    {
        // Filter videos voor de ADC-rol
        $adcVideos = Video::where('role', 'ADC')->get();

        // Haalt de tierlist op voor de ADC-rol
        $adcChampions = ChampionTierList::where('role', 'ADC')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('ADC.index', compact('adcVideos', 'adcChampions'));
    }


}
