<?php

namespace Database\Seeders;

use App\Models\Caracteristique;
use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'nom' => 'Résultat',
        ]);

        Categorie::create([
            'nom' => 'Proclamation',
        ]);

        Categorie::create([
            'nom' => 'Délibération',
        ]);
    }
}
