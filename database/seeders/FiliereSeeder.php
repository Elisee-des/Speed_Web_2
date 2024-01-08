<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Universite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universite = Universite::first();

        Filiere::create([
            'nom' => 'Mathematique Physique Chimie Informatique',
            'sigle' => 'MPCI',
            'universite_id' => $universite->id
        ]);

        Filiere::create([
            'nom' => 'Informatique',
            'sigle' => 'Informatique',
            'universite_id' => $universite->id
        ]);
    }
}
