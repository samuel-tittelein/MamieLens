<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des recettes</title>
</head>
<body>
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
    <img alt="visuel" src="../../../public/storage/recettes/icon.png"/>
@else
    <h3>aucune recettes</h3>
@endif
</body>
</html>
