<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index() {
        $recettes = Recette::all(); // stocke dans la variable $Taches, les objets Tache récupérés dans la table taches de la base de données.
        return view('images.index', ['titre' => "Recettes", 'images' => $recettes]);
    }

    public function submit(Request $request) {
        return view('statiques.accueil', ["Accueil"]);
    }
}
