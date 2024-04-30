@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $video->title }}</div>

                    <div class="card-body">
                        <p><strong>Beschrijving:</strong> {{ $video->description }}</p>
                        <p><strong>Video URL:</strong> <a href="{{ $video->video_url }}" target="_blank">{{ $video->video_url }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
