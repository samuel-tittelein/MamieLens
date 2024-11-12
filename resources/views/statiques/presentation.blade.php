<x-app :titre="$titre">
<div>
    <h1>{{$titre}}</h1>

    <p>Cette application répertorie les recettes de MamyLens</p>

    <img id="waifu-image" alt="Bienvenue" />

    <script>
        fetch('https://api.waifu.pics/sfw/dance')
            .then(response => response.json())  // Récupère la réponse JSON
            .then(data => {
                // Utilise l'URL de l'image récupérée dans le JSON pour afficher l'image
                document.getElementById('waifu-image').src = data.url;
            })
            .catch(error => console.error('Erreur lors de la récupération de l\'image:', error));
    </script>
    <style>
        #waifu-image {
            width: 400px;
            height: auto;
        }
    </style>
</div>
</x-app>
