<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userAdmin = User::create(
            array('nom_prenom' => 'SABIDANI Elisee', 'email' => 'admin@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'remember_token' => Str::random(10)),
        );
        $userAdmin->assignRole('Admin');


        $userGestionnaire = User::create(
            array('nom_prenom' => 'BONI jean', 'email' => 'gestionnaire@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'remember_token' => Str::random(10)),
        );
        $userGestionnaire->assignRole('Gestionnaire');


        $userDelegue = User::create(
            array('nom_prenom' => 'KABORE Adama', 'email' => 'delegue@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'remember_token' => Str::random(10)),
        );
        $userDelegue->assignRole('Delegue');


        $userEtudiant = User::create(
            array('nom_prenom' => 'ZONGO zenabou', 'email' => 'etudiant@gmail.com', 'email_verified_at' => now(), 'password' => bcrypt('password'), 'remember_token' => Str::random(10)),
        );
        $userEtudiant->assignRole('Etudiant');

    }
}
