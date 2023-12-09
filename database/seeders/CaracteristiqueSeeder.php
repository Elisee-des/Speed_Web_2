<?php

namespace Database\Seeders;

use App\Models\Caracteristique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Caracteristique::create([
            'nom' => 'Résultat',
        ]);

        Caracteristique::create([
            'nom' => 'Proclamation',
        ]);

        Caracteristique::create([
            'nom' => 'Délibération',
        ]);
    }
}
