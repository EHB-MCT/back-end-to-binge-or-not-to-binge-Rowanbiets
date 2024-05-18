


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorieten</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            height: 150px; /* Stel een vaste hoogte in voor de card-body */
            overflow: hidden; /* Verberg eventuele overflow van de inhoud */
        }
        .card-text {
            color: #cccccc;
        }

        /* Stijlen voor de legende */
        .legend {
            margin-top: 30px;
            margin-left: 10%;
           display: block;
        }

        .legend-title {
            font-size: 21px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .legend-items {
            display: flex;
            align-items: center;
        }

        .legend-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            margin-top: 20px;
        }

        .legend-color2 {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .legend-text {
            font-size: 14px;
            color: white;
            margin-right: 5px;
        }

        .legend-percentage {
            font-size: 14px;
            color: white;
        }

        .legend-bar-container {
            background-color: #f1f1f1; /* Default background color for the container */
            height: 16px;
            width: 50%;
            border-radius: 3px;
            overflow: hidden;
        }

        .legend-bar {
            display: flex;
            height: 100%;
        }

        .legend-color {
            height: 100%;
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

<div class="legend">
    <h4 class="legend-title">Favorite Roles:</h4>
    <div class="legend-bar-container">
        <div class="legend-bar">
            @foreach ($rolePercentages as $role => $percentage)
                <div class="legend-color" style="width: {{ $percentage }}%; background-color: {{ App\Http\Controllers\FavoriteVideosController::getColorForRole($role) }}"></div>
            @endforeach
        </div>
    </div>
    <div class="legend-items">
        @foreach ($rolePercentages as $role => $percentage)
            <div class="legend-item">
                <div class="legend-color2" style="background-color: {{ App\Http\Controllers\FavoriteVideosController::getColorForRole($role) }}"></div>
                <div class="legend-text">{{ ucfirst($role) }}</div>
                <div class="legend-percentage">{{ $percentage }}%</div>
            </div>
        @endforeach
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <!-- Favorieten sectie -->
        <div class="col-md-12">
            <h2>Favorieten</h2>
            <div id="favorites-list" class="row">
                <!-- Favorieten worden hier weergegeven -->
                @foreach ($favoriteVideos as $video)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <iframe width="100%" height="200" src="{{ $video->video_url }}" frameborder="0" allowfullscreen></iframe>
                            <button class="btn btn-danger mt-3" onclick="removeFromFavorites({{ $video->id }})">Verwijderen uit favorieten</button>
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
    // Functie om een video uit favorieten te verwijderen
    function removeFromFavorites(videoId) {
        // Controleer of de gebruiker is ingelogd
        @auth
        // Maak een AJAX-verzoek om de video uit favorieten te verwijderen
        axios.delete(`/videos/${videoId}/favorite`)
            .then(response => {
                // Geef feedback aan de gebruiker dat de video uit favorieten is verwijderd
                alert('Video is verwijderd uit favorieten!');
                // Laad de favorieten opnieuw nadat een video uit favorieten is verwijderd
                loadFavorites();
            })
            .catch(error => {
                // Geef een foutmelding weer als er een fout optreedt
                console.error('Er is een fout opgetreden bij het verwijderen uit favorieten:', error);
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
