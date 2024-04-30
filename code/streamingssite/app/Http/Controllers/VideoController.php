<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the videos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new video.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valideer de invoer van het formulier
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        // Sla de video op in de database
        Video::create($request->all());

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('videos.index')->with('success', 'Video successfully created.');
    }

    /**
     * Display the specified video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valideer de invoer van het formulier
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url',
        ]);

        // Haal de video op en update de gegevens
        $video = Video::findOrFail($id);
        $video->update($request->all());

        // Redirect naar de indexpagina met een succesbericht

        return redirect()->route('videos.index')->with('success', 'Video successfully updated.');
    }

    /**
     * Remove the specified video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Haal de video op en verwijder deze
        $video = Video::findOrFail($id);
        $video->delete();

        // Redirect naar de indexpagina met een succesbericht
        return redirect()->route('videos.index')->with('success', 'Video successfully deleted.');
    }
}
