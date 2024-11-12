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


Route::get('/images', [RecetteController::class,'index'])->name('images.index');
