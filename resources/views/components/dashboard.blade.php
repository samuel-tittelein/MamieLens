<x-app :titre="$titre">
    <div>
        <h1>{{$titre}}</h1>
        <p>Bienvenue dans l'application des recettes Connectée</p>
        <img src="{{ Vite::asset('resources/images/bannieregit.jpg') }}" alt="waifu" id="img-accueil">
    </div>
    <div>
        {{Auth::user()->name}}
        <button><a href="#" id="logout">Logout</a>
        </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script>
        document.getElementById('logout').addEventListener("click", (event) => {
            document.getElementById('logout-form').submit();
        });
    </script>

</x-app>
