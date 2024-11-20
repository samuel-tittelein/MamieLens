<x-app :titre="$titre">
<h2>La liste des recettes</h2>
<div class="content">

    <div class="menu-recettes">
        <button><a href="/recettes/edit">Editer</a></button>
        <button><a href="/recettes/create">Créer</a></button>
        <button><a href="/recettes/search">Rechercher</a></button>
        <button><a href="/recettes/delete">Supprimer</a></button>
    </div>

    @if(!empty($recettes))
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Visuel</th>
                <th scope="col">Temps de préparation</th>
                <th scope="col">Nombre de personnes</th>
                <th scope="col">Coût</th>
            </tr>
            </thead>

            <tbody>

            @foreach($recettes as $recette)
                <tr>
                    <td>{{$recette->id}}</td>
                    <td><strong>{{$recette->nom}}</strong></td>
                    <td>{{$recette->description}}</td>
                    <td><img alt="{{$recette->visuel}}" src="{{Vite::asset($recette->visuel)}}"/> </td>
                    <td>{{$recette->temps_preparation}} min</td>
                    <td>{{$recette->nb_personnes}} personnes</td>
                    <td>{{$recette->cout}}€</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>aucune recette</h3>
    @endif
</div>

</x-app>
