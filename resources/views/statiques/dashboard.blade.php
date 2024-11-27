<x-app :titre="$titre">
    <div>
        <h1>{{$titre}}</h1>
        <p>Bienvenue dans l'application des recettes Connectée</p>
    </div>
    <div>
        @if (Auth::check() && Auth::user()->name === "Sam")
            <img src="{{ Vite::asset('resources/images/amongusfeet.jpg') }}" alt="waifu" id="img-accueil">
        @endif
    </div>
    <script>
        document.getElementById('logout').addEventListener("click", (event) => {
            document.getElementById('logout-form').submit();
        });
    </script>

</x-app>
