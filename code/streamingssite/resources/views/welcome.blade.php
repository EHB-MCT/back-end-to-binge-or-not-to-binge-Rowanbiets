<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends Streaming</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welkom bij League Guiders</div>

                <div class="card-body">
                    <p>Ontdek live streams van je favoriete League of Legends-spelers.</p>
                    <p>Log in of registreer om te beginnen.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Inloggen</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Registreren</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
