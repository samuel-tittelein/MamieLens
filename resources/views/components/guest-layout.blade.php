<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/fortify.css', 'resources/js/app.js'])
</head>
<body>
<div class="main-container">
    <div class="menu">
        <nav>
            <div>
                <a href="{{ route('accueil') }}">Accueil</a>
            </div>
            <div>
                <a href="{{ route('login') }}">Connexion</a>
                <a href="{{ route('register') }}">Enregistrement</a>
            </div>
        </nav>
    </div>

    <div>
        {{ $slot }}
    </div>
    <x-footer></x-footer>
</div>

</body>
</html>
