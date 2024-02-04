<?php

namespace Database\Seeders;

use App\Models\Delegue;
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
            array('nom_prenom' => 'SABIDANI Elisee', 'email' => 'admin@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '76987689', 'ine' => 'N00290420191', 'remember_token' => Str::random(10)),
        );
        $userAdmin->assignRole('Admin');


        $userGestionnaire = User::create(
            array('nom_prenom' => 'BONI jean', 'email' => 'gestionnaire@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '70987689', 'ine' => 'N00270420191', 'remember_token' => Str::random(10)),
        );
        $userGestionnaire->assignRole('Gestionnaire');


        $userDelegue = User::create(
            array('nom_prenom' => 'Ouedraogo Alassane', 'email' => 'delegue@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '71987689', 'ine' => 'N00280420191', 'remember_token' => Str::random(10)),
        );
        $userDelegue->assignRole('Delegue');

        $userDelegue = User::create(
            array('nom_prenom' => 'Zongo Adama', 'email' => 'delegue1@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '71987689', 'ine' => 'N00280420191', 'remember_token' => Str::random(10)),
        );
        $userDelegue->assignRole('Delegue');

        $userDelegue = User::create(
            array('nom_prenom' => 'Sawadogo Kalité', 'email' => 'delegue2@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '71987689', 'ine' => 'N00280420191', 'remember_token' => Str::random(10)),
        );
        $userDelegue->assignRole('Delegue');

        $userDelegue = User::create(
            array('nom_prenom' => 'Boni karim', 'email' => 'delegue3@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '71987689', 'ine' => 'N00280420191', 'remember_token' => Str::random(10)),
        );
        $userDelegue->assignRole('Delegue');

        $userEtudiant = User::create(
            array('nom_prenom' => 'ZONGO Zenabou', 'email' => 'etudiant@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '75987689', 'ine' => 'N00250420191', 'remember_token' => Str::random(10)),
        );
        $userEtudiant->assignRole('Etudiant');

        $userEtudiant2 = User::create(
            array(
                'nom_prenom' => 'Kaboré fidèle', 'email' => 'etudiant2@gmail.com', 'email_verified_at' => now(), 'password' => 'password', 'telephone' => '75987689', 'ine' => 'N00250420191', 'remember_token' => Str::random(10)
            ),
        );
        $userEtudiant2->assignRole('Etudiant');
        
    }
}
