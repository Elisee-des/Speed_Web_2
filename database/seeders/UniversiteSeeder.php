<?php

namespace Database\Seeders;

use App\Models\Universite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universite::create([
            'nom' => 'Unversité Norbert Zongo',
            'sigle' => 'UNZ',
        ]);
    }
}
