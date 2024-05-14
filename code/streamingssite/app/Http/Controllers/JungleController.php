<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\ChampionTierList;

class JungleController extends Controller
{
    public function index()
    {
        // Filter videos voor de Jungle-rol
        $jungleVideos = Video::where('role', 'Jungle')->get();

        // Haal de tierlist op voor de Jungle-rol
        $jungleChampions = ChampionTierList::where('role', 'Jungle')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('jungle.index', compact('jungleVideos', 'jungleChampions'));
    }



}
