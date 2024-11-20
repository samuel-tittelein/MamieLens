<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index() {
        $recettes = Recette::all(); // stocke dans la variable $Taches, les objets Tache récupérés dans la table taches de la base de données.
        return view('recettes.index', ['titre' => "Recettes", 'recettes' => $recettes]);
    }

    public function submit(Request $request) {
        return view('statiques.accueil', ["Accueil"]);
    }

    public function recette($recette) {
        return view('recettes.recette', ['recette' => $recette]);
    }

    public function create() {
        return view('recettes.create', ['titre' => "Création d'une recette"]);
    }

    public function store(Request $request) {
        $recette = new Recette();
        $recette->nom = $request->input('nom');
        $recette->description = $request->input('description');
        $recette->category = $request->input('category');
        $recette->visuel = $request->input('visuel');
        $recette->temps_preparation = $request->input('temps_preparation');
        $recette->nb_personnes = $request->input('nb_personnes');
        $recette->cout = $request->input('cout');
        $recette->save();

        return redirect()->route('recettes.index');
    }

    public function edit($id) {
        $recette = Recette::find($id);
        return view('recettes.edit', ['recette' => $recette, 'titre' => "Éditer une recette"]);
    }

    public function update($id, Request $request) {
        $recette = Recette::find($id);
        $recette->nom = $request->input('nom');
        $recette->description = $request->input('description');
        $recette->category = $request->input('category');
        $recette->visuel = $request->input('visuel');
        $recette->temps_preparation = $request->input('temps_preparation');
        $recette->nb_personnes = $request->input('nb_personnes');
        $recette->cout = $request->input('cout');
        $recette->save();

        return redirect()->route('recettes.index');
    }

    public function destroy($id) {
        $recette = Recette::find($id);
        $recette->delete();

        return redirect()->route('recettes.index');
    }

    public function search(Request $request) {
        $search = $request->input('search');
        $recettes = Recette::where('nom', 'LIKE', "%$search%")
                              ->orWhere('description', 'LIKE', "%$search%")
                              ->orWhere('category', 'LIKE', "%$search%")
                              ->get();

        return view('recettes.index', ['titre' => "Recherche", 'recettes' => $recettes]);
    }
}
