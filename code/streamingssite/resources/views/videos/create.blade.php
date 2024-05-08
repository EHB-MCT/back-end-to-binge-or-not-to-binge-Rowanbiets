@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nieuwe video toevoegen</div>

                    <div class="card-body">
                        <form action="{{ route('videos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titel:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Beschrijving:</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="video_url">Video URL:</label>
                                <input type="text" class="form-control" id="video_url" name="video_url" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Opslaan</button>
                        </form>
                        <div class="form-group">
                            <label for="role">Rol:</label>
                            <select class="form-control" id="role" name="role">
                                <option value="Top">Top</option>
                                <option value="Jungle">Jungle</option>
                                <option value="Mid">Mid</option>
                                <option value="ADC">ADC</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>

                        <!-- Hier wordt de video getoond met een iframe -->

                        <form action="{{ route('videos.store') }}" method="POST">
                            <!-- Formuliervelden voor titel, beschrijving, video-URL, etc. -->
                        </form>

                        <!-- Sectie om de video weer te geven -->
                        <div class="video-container">
                            <iframe width="560" height="315" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
