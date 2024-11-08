<?php

namespace App\Http\Controllers;

use App\Models\ChampionTierList;
use Illuminate\Http\Request;
use App\Models\Video;

class MidController extends Controller
{
    public function index(Request $request)
    {
        // Filter videos voor de Mid-rol
        $midVideos = Video::where('role', 'Mid')->get();

        // Haalt de tierlist op voor de Mid-rol
        $midChampions = ChampionTierList::where('role', 'Mid')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('mid.index', compact('midVideos', 'midChampions'));


    }


}
