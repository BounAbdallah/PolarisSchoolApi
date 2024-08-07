<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UE;

class UESeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertion de données d'exemple
        UE::create([
            'libelle' => 'Mathematics',
            'date_debut' => '2024-01-15',
            'date_fin' => '2024-05-15',
            'coef' => 5,
        ]);

        UE::create([
            'libelle' => 'Physics',
            'date_debut' => '2024-02-01',
            'date_fin' => '2024-06-01',
            'coef' => 4,
        ]);

        UE::create([
            'libelle' => 'Chemistry',
            'date_debut' => '2024-03-01',
            'date_fin' => '2024-07-01',
            'coef' => 3,
        ]);

        UE::create([
            'libelle' => 'Biology',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-08-01',
            'coef' => 6,
        ]);

        UE::create([
            'libelle' => 'Computer Science',
            'date_debut' => '2024-05-01',
            'date_fin' => '2024-09-01',
            'coef' => 7,
        ]);
    }
}
