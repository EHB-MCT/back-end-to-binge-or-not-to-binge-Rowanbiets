<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class ADCController extends Controller
{
    public function index(Request $request)
    {
        $videos = Video::where('role', 'ADC')->get();
        return view('adc.index', compact('videos'));
    }

    // Andere methoden kunnen worden toegevoegd indien nodig...
}
