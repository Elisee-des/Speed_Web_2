<?php

namespace Database\Seeders;

use App\Models\Delegue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DelegueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Delegue::create([
            'delegues' => 'Ouedraogo Alassane & Zongo Adama',
            'filiere' => 'MPCI',
            'niveau_etude' => 'Licence 1',
            'promotion' => '2021',
        ]);

        Delegue::create([
            'delegues' => 'Ouedraogo Elisee & Kaboré Eric',
            'filiere' => 'SVT',
            'niveau_etude' => 'Licence 2',
            'promotion' => '2022',
        ]);

        Delegue::create([
            'delegues' => 'Sawadogo Kalité & Boni karim',
            'filiere' => 'LSH',
            'niveau_etude' => 'Licence 3',
            'promotion' => '2020',
        ]);

    }
}
