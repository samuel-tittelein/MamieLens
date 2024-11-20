<?php

use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('statiques.accueil', ['titre' => 'Accueil']);
})->name('accueil');
Route::get('/presentation', function () {
    return view('statiques.presentation', ['titre' => 'Présentation']);
})->name('presentation');
Route::get('/contact', function () {
    return view('statiques.contact', ['titre' => 'Contact']);
})->name('contact');

Route::post('/contact/submit', [RecetteController::class,'submit'])->name('contact.submit');

Route::get('/recettes', [RecetteController::class,'index'])->name('images.index');

Route::get('/recettes/{recette}', [RecetteController::class,'recette'])->name('recettes.recette');
Route::get('/recettes/create', [RecetteController::class,'create'])->name('recettes.create');
Route::post('/recettes', [RecetteController::class,'store'])->name('recettes.store');

Route::get('/recettes/{recette}/edit', [RecetteController::class,'edit'])->name('recettes.edit');
Route::put('/recettes/{recette}', [RecetteController::class,'update'])->name('recettes.update');
Route::delete('/recettes/{recette}', [RecetteController::class,'destroy'])->name('recettes.destroy');

Route::get('/recettes/search', [RecetteController::class,'search'])->name('recettes.search');
