<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'category',
        'visuel',
        'temps_preparation',
        'nb_personnes',
        'cout',
        'user_id',
    ];

    protected $casts = [
        'temps_preparation' => 'integer',
        'nb_personnes' => 'integer',
        'cout' => 'integer',
        'user_id' => 'integer',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }
}
