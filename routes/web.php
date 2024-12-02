<?php

use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;

Route::resource('recettes', 'RecetteController');

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

Route::resource('recettes', RecetteController::class);
/*
Route::get('/recettes', [RecetteController::class,'index'])->name('recettes.index');

Route::get('/recettes/{id}', [RecetteController::class,'recette'])->where('id', '[0-9]+')->name('recettes.recette');
Route::get('/recettes/create', [RecetteController::class,'create'])->name('recettes.create');
Route::post('/recettes', [RecetteController::class,'store'])->name('recettes.store');

Route::get('/recettes/{id}/edit', [RecetteController::class,'edit'])->where('id', '[0-9]+')->name('recettes.edit');
Route::put('/recettes/{id}', [RecetteController::class,'update'])->where('id', '[0-9]+')->name('recettes.update');
Route::delete('/recettes/{id}', [RecetteController::class,'destroy'])->where('id', '[0-9]+')->name('recettes.destroy');

Route::get('/recettes/search', [RecetteController::class,'search'])->name('recettes.search');
*/
Route::get('/home', function () {
    return view('statiques.dashboard', ['titre' => 'Dashboard']);
})->middleware(['auth'])->name('home');

Route::middleware(['auth'])->get('/dashboard', function () {
    return view('statiques.dashboard', ['titre' => 'Dashboard']);
})->name('home2');

