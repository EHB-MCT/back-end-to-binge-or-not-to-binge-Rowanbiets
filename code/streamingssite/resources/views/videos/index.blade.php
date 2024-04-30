@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Video's</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Titel</th>
                                <th scope="col">Beschrijving</th>
                                <th scope="col">Actie</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $video->title }}</td>
                                    <td>{{ $video->description }}</td>
                                    <td>
                                        <a href="{{ route('videos.show', $video->id) }}" class="btn btn-info">Bekijken</a>
                                        <a href="{{ route('videos.edit', $video->id) }}" class="btn btn-primary">Bewerken</a>
                                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je zeker dat je deze video wilt verwijderen?')">Verwijderen</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
