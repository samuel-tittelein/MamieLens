<x-app :titre="$titre">
<h2>La liste des recettes</h2>

@if(!empty($recettes))
    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Description</td>
            <td>Visuel</td>
            <td>Temps de préparation</td>
            <td>Nombre de personnes</td>
            <td>Coût</td>
        </tr>
        </thead>

        <tbody>

        @foreach($recettes as $recette)
            <tr>
                <td>{{$recette->id}}</td>
                <td><strong>{{$recette->nom}}</strong></td>
                <td>{{$recette->description}}</td>
                <td><img alt="{{$recette->visuel}}" src="../../../{{$recette->visuel}}"/> </td>
                <td>{{$recette->temps_preparation}}</td>
                <td>{{$recette->nb_personnes}}</td>
                <td>{{$recette->cout}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <h3>aucune recette</h3>
@endif
</x-app>
