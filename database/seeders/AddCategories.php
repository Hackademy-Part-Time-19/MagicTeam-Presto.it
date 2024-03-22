<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            // Define default rows here
            ['name' => 'Categoria 1'],
            ['name' => 'Categoria 2'],
            ['name' => 'Categoria 3'],
            // Add more rows as needed
        ]);
    }
}
