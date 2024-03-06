<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Product::create([
            'nome' => 'Camiseta Polo', 
            'valor' => 39.99, 
            'quantidade' => 100, 
            'category_id' => 1, 
            'supplier_id' => 1,
        ]);
        
        Product::create([
            'nome' => 'Tênis Esportivo', 
            'valor' => 79.99, 
            'quantidade' => 50, 
            'category_id' => 2, 
            'supplier_id' => 2,
        ]);
        
        Product::create([
            'nome' => 'Relógio de Pulso', 
            'valor' => 149.99, 
            'quantidade' => 30, 
            'category_id' => 3, 
            'supplier_id' => 3,
        ]);
        
        Product::create([
            'nome' => 'Celular Smartphone', 
            'valor' => 799.99, 
            'quantidade' => 20, 
            'category_id' => 4, 
            'supplier_id' => 4,
        ]);
        
        Product::create([
            'nome' => 'Panela Elétrica', 
            'valor' => 49.99, 
            'quantidade' => 40, 
            'category_id' => 5, 
            'supplier_id' => 5,
        ]);
        
        Product::create([
            'nome' => 'Livro de Romance', 
            'valor' => 29.99, 
            'quantidade' => 80, 
            'category_id' => 6, 
            'supplier_id' => 6,
        ]);
        
        Product::create([
            'nome' => 'Mochila Escolar', 
            'valor' => 19.99, 
            'quantidade' => 120, 
            'category_id' => 7, 
            'supplier_id' => 7,
        ]);
        
        Product::create([
            'nome' => 'Fones de Ouvido Bluetooth', 
            'valor' => 59.99, 
            'quantidade' => 60, 
            'category_id' => 3, 
            'supplier_id' => 8,
        ]);
        
        Product::create([
            'nome' => 'Cadeira de Escritório', 
            'valor' => 129.99, 
            'quantidade' => 25, 
            'category_id' => 8, 
            'supplier_id' => 9,
        ]);
        
        Product::create([
            'nome' => 'Laptop Ultrabook', 
            'valor' => 1299.99, 
            'quantidade' => 15, 
            'category_id' => 9, 
            'supplier_id' => 10,
        ]);
        
        Product::create([
            'nome' => 'Smartwatch', 
            'valor' => 199.99, 
            'quantidade' => 50, 
            'category_id' => 4, 
            'supplier_id' => 1,
        ]);
        
        Product::create([
            'nome' => 'Câmera Digital', 
            'valor' => 299.99, 
            'quantidade' => 30, 
            'category_id' => 10, 
            'supplier_id' => 2,
        ]);
        
        Product::create([
            'nome' => 'Bicicleta Mountain Bike', 
            'valor' => 699.99, 
            'quantidade' => 20, 
            'category_id' => 11, 
            'supplier_id' => 3,
        ]);
        
        Product::create([
            'nome' => 'Óculos de Sol', 
            'valor' => 59.99, 
            'quantidade' => 100, 
            'category_id' => 3, 
            'supplier_id' => 4,
        ]);
        
        Product::create([
            'nome' => 'Console de Video Game', 
            'valor' => 499.99, 
            'quantidade' => 15, 
            'category_id' => 4, 
            'supplier_id' => 5,
        ]);
        
        Product::create([
            'nome' => 'Máquina de Café Expresso', 
            'valor' => 149.99, 
            'quantidade' => 40, 
            'category_id' => 5, 
            'supplier_id' => 6,
        ]);
        
        Product::create([
            'nome' => 'Caixa de Ferramentas', 
            'valor' => 79.99, 
            'quantidade' => 25, 
            'category_id' => 12, 
            'supplier_id' => 7,
        ]);
        
        Product::create([
            'nome' => 'Brinquedo de Pelúcia', 
            'valor' => 19.99, 
            'quantidade' => 200, 
            'category_id' => 13, 
            'supplier_id' => 8,
        ]);
        
        Product::create([
            'nome' => 'Mala de Viagem', 
            'valor' => 89.99, 
            'quantidade' => 35, 
            'category_id' => 14, 
            'supplier_id' => 9,
        ]);
        
        Product::create([
            'nome' => 'Teclado Gamer', 
            'valor' => 129.99, 
            'quantidade' => 50, 
            'category_id' => 9, 
            'supplier_id' => 10,
        ]);
        
    

    }
}
