<?php

namespace Database\Seeders;

use App\Models\Delegue;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DelegueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $user_1 = User::where('nom_prenom', 'Ouedraogo Alassane')->first();
           $user_2 = User::where('nom_prenom', 'Zongo Adama')->first();

           $user_3 = User::where('nom_prenom', 'Sawadogo Kalité')->first();
           $user_4 = User::where('nom_prenom', 'Boni karim')->first();

        Delegue::create([
            'delegues' => 'Ouedraogo Alassane & Zongo Adama',
            'filiere' => 'MPCI',
            'niveau_etude' => 'Licence 1',
            'promotion' => '2021',
            'id_delegue_1' => $user_1->id,
            'id_delegue_2' => $user_2->id,
        ]);

        Delegue::create([
            'delegues' => 'Ouedraogo Elisee & Kaboré Eric',
            'filiere' => 'SVT',
            'niveau_etude' => 'Licence 2',
            'promotion' => '2022',
            'id_delegue_1' => $user_3->id,
            'id_delegue_2' => $user_4->id,
        ]);

    }
}
