<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Universite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UniversiteSeeder::class,
            CategorieSeeder::class,
            RoleAndPermissionSeeder::class,
            UserSeeder::class,
        ]);
    }
}
