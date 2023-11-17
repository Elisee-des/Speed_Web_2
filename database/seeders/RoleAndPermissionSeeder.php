<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'can-manage-files']);

        $adminRole = Role::create(['name' => 'Admin']);
        $gestionnaireRole = Role::create(['name' => 'Gestionnaire']);
        $delegueRole = Role::create(['name' => 'Delegue']);
        $etudiantRole = Role::create(['name' => 'Etudiant']);

        // $adminRole->givePermissionTo('all');
        $delegueRole->givePermissionTo('can-manage-files');
    }
}
