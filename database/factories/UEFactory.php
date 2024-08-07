<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UEFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libelle' => $this->faker->word, // Nom de l'UE
            'date_debut' => $this->faker->date('Y-m-d', '2024-12-31'), // Date de début, jusqu'à fin 2024
            'date_fin' => $this->faker->date('Y-m-d', '2024-12-31'), // Date de fin, jusqu'à fin 2024
            'coef' => $this->faker->numberBetween(1, 10), // Coefficient entre 1 et 10
        ];
    }
}
