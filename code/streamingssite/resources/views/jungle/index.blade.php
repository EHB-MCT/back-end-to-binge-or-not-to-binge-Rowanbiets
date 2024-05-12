<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends Jungle Videos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Voeg extra CSS-bestanden toe voor aanvullende stijlen -->
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
    </style>
</head>
<body>

<!-- Navigatiebalk -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand" href="{{ route('videos.index', ['role' => 'Jungle']) }}">
            <img src="/css/images/League%20of%20Legends.png" alt="League Guiders Logo" width="100" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 20px;">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('videos.index', ['role' => 'Top']) }}">Top</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('videos.index', ['role' => 'Jungle']) }}">Jungle</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('videos.index', ['role' => 'Mid']) }}">Mid</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('videos.index', ['role' => 'ADC']) }}">ADC</a>
            </li>
            <li class="nav-item" style="margin-right: 100px;">
                <a class="nav-link" href="{{ route('videos.index', ['role' => 'Support']) }}">Support</a>
            </li>

            <li class="nav-item" style="margin-right: 140px;">
                <a class="nav-link" href="#">Favorieten</a>
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

<!-- Content sectie -->
<div class="container mt-4">
    <div class="row">
        <!-- Video's sectie -->
        <div class="col-md-12">
            <h2>League of Legends Jungle Videos</h2>
            <div class="row">
                <!-- Hier kunnen jungle video's worden weergegeven -->
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
