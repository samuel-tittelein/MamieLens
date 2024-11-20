<x-app :titre="$titre">

    <form method="post" action="{{route('recettes.store')}}">
        @csrf <!-- Protection contre les attaques CSRF -->

        <!-- Champ pour le nom de la recette -->
        <label for="nom">Nom de la recette :</label>
        <input type="text" id="nom" name="nom" required>

        <!-- Champ pour la description -->
        <label for="description">Description :</label>
        <textarea id="description" name="description" rows="4" required></textarea>




        <!-- Champ pour la catégorie -->
        <label for="category">Catégorie :</label>
        <select id="category" name="category" required>
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>

        <!-- Champ pour le visuel (image ou URL) -->
        <label for="visuel">Visuel :</label>
        <input type="file" id="visuel" name="visuel" accept="image/*">

        <!-- Champ pour le temps de préparation -->
        <label for="temps_preparation">Temps de préparation (en minutes) :</label>
        <input type="number" id="temps_preparation" name="temps_preparation" min="1" required>

        <!-- Champ pour le nombre de personnes -->
        <label for="nb_personnes">Nombre de personnes :</label>
        <input type="number" id="nb_personnes" name="nb_personnes" min="1" required>

        <!-- Champ pour le coût -->
        <label for="cout">Coût (en €) :</label>
        <input type="number" id="cout" name="cout" step="0.01" min="0" required>


        <button type="submit">Créer</button>
    </form>
</x-app>
