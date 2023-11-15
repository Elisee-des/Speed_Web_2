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
        Permission::create(['name' => 'read-admin-dashbaord']);
        Permission::create(['name' => 'read-delegue-dashbaord']);

        $adminRole = Role::create(['name' => 'Admin']);
        $delegueRole = Role::create(['name' => 'Delegue']);

        $adminRole->givePermissionTo([
            'read-admin-dashbaord',
            'read-delegue-dashbaord',
        ]);

        $delegueRole->givePermissionTo([
            'read-delegue-dashbaord',
        ]);
    }
}
