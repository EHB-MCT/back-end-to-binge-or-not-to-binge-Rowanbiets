<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class SupportController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::where('role', 'Support')->get();
        return view('support.index', compact('videos'));
    }

    // Andere methoden kunnen worden toegevoegd indien nodig...
}
