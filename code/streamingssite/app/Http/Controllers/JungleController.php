<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class JungleController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::where('role', 'Jungle')->get();
        return view('jungle.index', compact('videos'));
    }

    // Andere methoden kunnen worden toegevoegd indien nodig...
}
