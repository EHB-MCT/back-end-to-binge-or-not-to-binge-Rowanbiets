<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all(); // Alle video's ophalen
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
            // Remove 'role' validation
        ]);

        $video = new Video([
            'title' => $request->title,
            'description' => $request->description,
            'video_url' => $request->video_url,
            // Remove 'role' assignment
        ]);

        $video->save();

        return redirect()->route('videos.index')
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
            // And any other validation rules you may need
        ]);

        $video = Video::findOrFail($id);
        $video->update($request->all());

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


}
