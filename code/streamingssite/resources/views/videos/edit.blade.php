@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Video bewerken</div>

                    <div class="card-body">
                        <form action="{{ route('videos.update', $video->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Titel:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Beschrijving:</label>
                                <textarea class="form-control" id="description" name="description">{{ $video->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="video_url">Video URL:</label>
                                <input type="text" class="form-control" id="video_url" name="video_url" value="{{ $video->video_url }}" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Rol:</label>
                                <select class="form-control" id="role" name="role">
                                    <option value="Top" {{ $video->role == 'Top' ? 'selected' : '' }}>Top</option>
                                    <option value="Jungle" {{ $video->role == 'Jungle' ? 'selected' : '' }}>Jungle</option>
                                    <option value="Mid" {{ $video->role == 'Mid' ? 'selected' : '' }}>Mid</option>
                                    <option value="ADC" {{ $video->role == 'ADC' ? 'selected' : '' }}>ADC</option>
                                    <option value="Support" {{ $video->role == 'Support' ? 'selected' : '' }}>Support</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Opslaan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
