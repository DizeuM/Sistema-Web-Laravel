<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Roupas',
            'Calçados',
            'Acessórios',
            'Eletrônicos',
            'Eletrodomésticos',
            'Livros',
            'Material Escolar',
            'Móveis',
            'Computadores',
            'Fotografia',
            'Esportes',
            'Ferramentas',
            'Brinquedos',
            'Bagagem',
         ];
      
         foreach ($categories as $category) {
              Category::create(['nome' => $category]);
         }
    }
}
