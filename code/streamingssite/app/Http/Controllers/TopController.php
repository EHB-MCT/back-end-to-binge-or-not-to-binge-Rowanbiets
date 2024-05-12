<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\ChampionTierList;
class TopController extends Controller
{
    public function index()
    {
        // Filter videos voor de Top-lane
        $topVideos = Video::where('role', 'Top')->get();

        // Haal de tierlist op voor de Top-lane
        $topChampions = ChampionTierList::where('role', 'Top')->orderBy('win_rate', 'desc')->limit(10)->get();

        return view('top.index', compact('topVideos', 'topChampions'));


    }

    //  andere methoden, zoals create, store, show, edit, update, destroy, etc.
}
