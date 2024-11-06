<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index() {
        $recettes = Recette::all(); // stocke dans la variable $Taches, les objets Tache récupérés dans la table taches de la base de données.
        return view('recettes.index', ['recettes' => $recettes]);
    }
}
