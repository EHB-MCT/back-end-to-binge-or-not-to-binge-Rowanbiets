<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->input('role'); // Haal de rol op uit de queryparameters

        // Als er geen rol is opgegeven, toon dan alle video's
        if ($role === null) {
            $videos = Video::all();
        } else {
            // Filter de video's op basis van de rol
            $videos = Video::where('role', $role)->get();
        }

        return view('welcome', compact('videos'));
    }

    public function create()
    {
        $video = new Video(); // Maak een nieuw Video-model aan
        return view('videos.create', compact('video'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'required|url',
            'role' => 'required|in:Top,Jungle,Mid,ADC,Support', // Valideer de rol
        ]);

        $video = new Video([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'role' => $request->role, // Voeg 'role' toe aan de video
        ]);

        $video->save();

        // Redirect naar de juiste pagina op basis van de rol

        $routeName = $request->role == 'Top' ? 'top.index' :
            ($request->role == 'Jungle' ? 'jungle.index' :
                ($request->role == 'Mid' ? 'mid.index' :
                    ($request->role == 'ADC' ? 'adc.index' :
                        'support.index')));

        return redirect()->route($routeName)
            ->with('success', 'Video created successfully.');
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        $championTierList = $video->championTierList;

        // Geeft de tier list mee aan de view
        return view('videos.show', compact('video', 'championTierList'));
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Voeg eventuele andere validatieregels toe die je nodig hebt
        ]);

        $video = Video::findOrFail($id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_url = $request->video_url;
        $video->role = $request->role; // Voeg rol toe aan de video-update

        $video->save();

        return redirect()->route('videos.index')
            ->with('success', 'Video updated successfully.');
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video deleted successfully.');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $videos = Video::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->orWhere('role', 'like', '%' . $query . '%')
            ->get();

        return view('search', compact('videos', 'query'));
    }

}
