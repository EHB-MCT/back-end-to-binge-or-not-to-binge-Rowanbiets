<?php

namespace App\Http\Controllers;

use App\Models\ChampionTierList;
use Illuminate\Http\Request;

class TierListController extends Controller
{
    public function showTopTierlist()
    {
        // Haal de topchampions op uit de database
        $topChampions = ChampionTierList::where('role', 'Top')->orderBy('win_rate', 'desc')->take(10)->get();

        // Geef de gegevens door aan de blade-template
        return view('top.index', compact('topChampions'));
    }


    public function showJungleTierlist()
    {
        $jungleTierList = ChampionTierList::where('role', 'Jungle')->get();
        return view('jungle', compact('jungleTierList'));
    }

    public function showMidTierlist()
    {
        $midTierList = ChampionTierList::where('role', 'Mid')->get();
        return view('mid', compact('midTierList'));
    }

    public function showAdcTierlist()
    {
        $adcTierList = ChampionTierList::where('role', 'ADC')->get();
        return view('adc', compact('adcTierList'));
    }

    public function showSupportTierlist()
    {
        $supportTierList = ChampionTierList::where('role', 'Support')->get();
        return view('support', compact('supportTierList'));
    }
}


