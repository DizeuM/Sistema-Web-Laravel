<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userAdmin = User::create([
            'name' => 'TechAdmin', 
            'username' => 'techadmin', 
            'email' => 'techadmin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $userAdmin->assignRole('TechAdmin');


        $userAdmin = User::create([
            'name' => 'Admin', 
            'username' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $userAdmin->assignRole('Admin');


        $userCadastro = User::create([
            'name' => 'Cadastro', 
            'username' => 'cadastro', 
            'email' => 'cadastro@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $userCadastro->assignRole('Cadastro');


        $userVisualiza = User::create([
            'name' => 'Visualiza', 
            'username' => 'visualiza', 
            'email' => 'visualiza@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $userVisualiza->assignRole('Visualiza');

    }
}
