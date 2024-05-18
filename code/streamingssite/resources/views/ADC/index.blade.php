<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends Jungle Videos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('/css/images/favicon-32x32.png') }}" type="image/x-icon">
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.93);
            background-size: cover;
            color: white;
        }
        .row h2{
            font-weight: bold;
            font-family: "Impact";
            font-size: 32pt;
            text-align: center;
            padding: 20px;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .navbar-brand {
            font-family: 'Arial Black', sans-serif;
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .nav-item {
            margin-right: 20px; /* Verhoog de marge tussen de woorden */
        }
        .list-group-item {
            background-color: rgba(0, 0, 0, 0.6);
            border: none;
            color: white;
            font-weight: bold;
        }
        .list-group-item:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .card {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            width: 100%;
        }
        .card-title {
            font-weight: bold;
            color: #ffcc00;
        }
        .card-body {
            height: 150px;
            overflow: hidden;
        }
        .card-text {
            color: #cccccc;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 120px;

        }
        th, td {
            border: 1px solid #ffffff;
            padding: 10px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #0b0c10;
        }
        tr:nth-child(even) {
            background-color: #0b0c10;
        }
        tr:nth-child(odd) {
            background-color: #1f2833;
        }
        h3 {
            text-align: left;
            margin-top: 50px;
            margin-left: 120px;
            font-family: "Impact";

        }
        h1 {
            text-align: center;
            margin-top: 50px;
            font-family: "Impact";
        }
    </style>
</head>
<body>

<!-- Navigatiebalk -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand" href="{{ route('videos.index') }}">
            <img src="{{ asset('/css/images/League_of_Legends.png') }}" alt="League Guiders Logo" width="100" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 20px;">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('top.index') }}">Top</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('jungle.index') }}">Jungle</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('mid.index') }}">Mid</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('adc.index') }}">ADC</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('support.index') }}">Support</a>
            </li>

            <li class="nav-item" style="margin-right: 140px;">
                <a class="nav-link" href="{{ route('favorite.index') }}">Favorieten</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Inloggen</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registreren</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Uitloggen
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<h1>Welcome to the AD Carry role!</h1>
<h3>Tier List</h3>

<table>
    <thead>
    <tr>
        <th>Champion Name</th>
        <th>Tier</th>
        <th>Win Rate</th>
        <th>Pick Rate</th>
        <th>Ban Rate</th>
        <th>Games Played</th>
    </tr>
    </thead>
    <tbody>
    @foreach($adcChampions as $champion)
        <tr>
            <td>{{ $champion->champion_name }}</td>
            <td>{{ $champion->tier }}</td>
            <td>{{ $champion->win_rate }}%</td>
            <td>{{ $champion->pick_rate }}%</td>
            <td>{{ $champion->ban_rate }}%</td>
            <td>{{ $champion->games_played }}</td>
        </tr>
    @endforeach
    </tbody>
</table>


<!-- Content sectie -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2>Trending</h2>
            <div class="row">
                @foreach($adcVideos as $video)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <iframe width="100%" height="200" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                            <button class="btn btn-primary" onclick="addToFavorites({{ $video->id }})">Like</button>
                            <div class="card-body">
                                <h5 class="card-title">{{ $video->title }}</h5>
                                <p class="card-text">{{ $video->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    // Functie om een video aan favorieten toe te voegen
    function addToFavorites(videoId) {
// Controleer of de gebruiker is ingelogd
        @auth
        // Maak een AJAX-verzoek om de video aan favorieten toe te voegen
        axios.post(`/videos/${videoId}/favorite`)
            .then(response => {
                // Geef feedback aan de gebruiker dat de video aan favorieten is toegevoegd
                alert('Video is toegevoegd aan favorieten!');
                // Laad de favorieten opnieuw nadat een video aan favorieten is toegevoegd
                loadFavorites();
            })
            .catch(error => {
                // Geef een foutmelding weer als er een fout optreedt
                console.error('Er is een fout opgetreden bij het toevoegen aan favorieten:', error);
            });
        @else
        // Als de gebruiker niet is ingelogd, stuur hem/haar naar het inlogscherm
        window.location.href = "{{ route('login') }}";
        @endauth
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
