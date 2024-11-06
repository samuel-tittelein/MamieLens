<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'description',
        'category',
        'visuel',
        'temps_preparation',
        'nb_personnes',
        'cout'
    ];

    protected $casts = [
        'temps_preparation' => 'integer',
        'nb_personnes' => 'integer',
        'cout' => 'float'
    ];
}
