<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(2),
            'category' => $this->faker->randomElement(['patisserie', 'salé', 'dessert', 'plat', 'boisson']),
            'visuel' => $this->random_pic('resources/images'),
            'temps_preparation' => $this->faker->numberBetween(15, 180),
            'nb_personnes' => $this->faker->numberBetween(1, 10),
            'cout' => $this->faker->randomDigitNotNull()
        ];
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('images');
    }


    function random_pic($dir)
    {
        $files = glob($dir . '/*.*');
        $file = array_rand($files);
        return $files[$file];
    }
}
