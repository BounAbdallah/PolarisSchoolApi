<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matiere;
use App\Models\UE;

class MatiereSeeder extends Seeder
{
    public function run()
    {
        $ue1 = UE::first(); // Récupère la première UE pour associer les matières

        Matiere::create([
            'libelle' => 'Mathematics',
            'date_debut' => '2024-01-01',
            'date_fin' => '2024-06-01',
            'u_e_id' => 2,
        ]);

        Matiere::create([
            'libelle' => 'Science',
            'date_debut' => '2024-01-01',
            'date_fin' => '2024-06-01',
            'u_e_id' => 2,
        ]);
    }
}
