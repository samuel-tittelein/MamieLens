<x-app :titre="$titre">
<div>
    <h1>{{$titre}}</h1>
    <p>Bienvenue dans l'application des recettes</p>
    <img src="{{ Vite::asset('resources/images/bannieregit.jpg') }}" alt="waifu" id="img-accueil">
</div>
</x-app>
