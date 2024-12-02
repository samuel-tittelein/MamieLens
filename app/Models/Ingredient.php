<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    protected $fillable = [
        'nom',
        'nature',
        'visuel',
    ];

    public function recettes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Recette::class, 'compose');
    }
}
