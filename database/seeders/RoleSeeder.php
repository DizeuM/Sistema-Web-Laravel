<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::create(['name' => 'TechAdmin']);
        $permissions = Permission::all();
        $roleAdmin->givePermissionTo($permissions);

        $roleAdmin = Role::create(['name' => 'Admin']);
        $permissions = Permission::whereIn('id', [5,6,7,8,9,10,11,12])->get();
        $roleAdmin->givePermissionTo($permissions);

        $roleCadastro = Role::create(['name' => 'Cadastro']);
        $permissions = Permission::whereIn('id', [9,10,11,12])->get();
        $roleCadastro->givePermissionTo($permissions);

        $roleVisualiza = Role::create(['name' => 'Visualiza']);
        $permissions = Permission::whereIn('id', [9])->get();
        $roleVisualiza->givePermissionTo($permissions);

    }
}
