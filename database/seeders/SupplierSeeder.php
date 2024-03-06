<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            'Fashion Supplier Inc.',
            'Footwear Co.',
            'Timepieces Ltd.',
            'ElectroGadget Corp.',
            'Kitchen Supplies Ltd.',
            'Book Emporium Inc.',
            'School Gear Co.',
            'Audio Tech Ltd.',
            'Office Furnishings Inc.',
            'Tech Solutions Ltd.',
         ];
      
         foreach ($suppliers as $supplier) {
            Supplier::create(['nome' => $supplier]);
         }
    }
}