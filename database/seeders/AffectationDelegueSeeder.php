<?php

namespace Database\Seeders;

use App\Models\Delegue;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AffectationDelegueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $delegue = Delegue::where('delegues', 'Ouedraogo Alassane & Zongo Adama')->first();
        $delegue2 = Delegue::where('delegues', 'Sawadogo Kalité & Boni karim')->first();
        $user_3 = User::where('nom_prenom', 'ZONGO Zenabou')->first();
        $user_4 = User::where('nom_prenom', 'Kaboré fidèle')->first();

        $user_3->delegues()->attach($delegue);
        $user_4->delegues()->attach($delegue2);

    }
}
