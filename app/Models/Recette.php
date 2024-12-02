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
        'cout'
    ];

    protected $casts = [
        'temps_preparation' => 'integer',
        'nb_personnes' => 'integer',
        'cout' => 'integer'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ingredients(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class, 'compose')
            ->as('compose')
            ->withPivot('quantite', 'observation');
    }

}
