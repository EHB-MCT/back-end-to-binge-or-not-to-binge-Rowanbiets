<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class MidController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::where('role', 'Mid')->get();
        return view('mid.index', compact('videos'));
    }

    // Andere methoden kunnen worden toegevoegd indien nodig...
}
