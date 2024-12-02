<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RecetteController extends Controller
{
    public function index() {
        $recettes = Recette::all(); // stocke dans la variable $Taches, les objets Tache récupérés dans la table taches de la base de données.
        return view('recettes.index', ['titre' => "Recettes", 'recettes' => $recettes]);
    }

    public function submit(Request $request) {
        return view('statiques.accueil', ["Accueil"]);
    }


    public function show(int $id) {
        $recette = Recette::find($id);
        return view('recettes.recette', ['titre' => $recette->nom, 'recette' => $recette]);
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
        $recette = Recette::findOrFail($id);


        if (Gate::denies('delete-tache', $recette)) {
            return redirect()->route('recette.show',
                ['titre' => 'Affichage d\'une tâche', 'id' => $recette->id, 'action' => 'show'])
                ->with('type', 'error')
                ->with('msg', 'Impossible de supprimer la tâche');
        }
        $recette->delete();

        return redirect()->route('recettes.index', ['recettes' => $recette])
            ->with('type', 'success')
            ->with('msg', 'Tâche supprimée avec succès');
    }

    /*
    public function search(Request $request) {
        $search = $request->input('search');
        $recettes = Recette::where('nom', 'LIKE', "%$search%")
                              ->orWhere('description', 'LIKE', "%$search%")
                              ->orWhere('category', 'LIKE', "%$search%")
                              ->get();

        return view('recettes.index', ['titre' => "Recherche", 'recettes' => $recettes]);
    }*/

    public function create()
    {
        // Récupérer toutes les catégories de la base de données
        $categories = Recette::distinct('category')->pluck('category');

        // Passer les catégories à la vue
        return view('recettes.create', ['titre' => "Création d'une recette", 'categories' => $categories]);
    }
}
