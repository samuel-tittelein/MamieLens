<?php

namespace Database\Seeders;

use App\Models\Recette;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(IngredientSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RecetteSeeder::class);
    }
}
