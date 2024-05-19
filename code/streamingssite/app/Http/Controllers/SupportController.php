<?php

namespace App\Http\Controllers;

use App\Models\ChampionTierList;
use Illuminate\Http\Request;
use App\Models\Video;

class SupportController extends Controller
{
    public function index()
    {
        // Filter videos voor de Support-lane
        $supportVideos = Video::where('role', 'Support')->get();

        // Haal de tierlist op voor de Support-lane
        $supportChampions = ChampionTierList::where('role', 'Support')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('support.index', compact('supportVideos', 'supportChampions'));


    }
}
