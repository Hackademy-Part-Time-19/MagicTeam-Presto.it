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
            ['name' => 'Elettronica'],
            ['name' => 'Abbigliamento'],
            ['name' => 'Casa'],
            ['name' => 'Animali'],
            ['name' => 'Sport'],
            ['name' => 'Beauty'],
            ['name' => 'Gioielli'],
            ['name' => 'Libri'],
            ['name' => 'Fai da te'],
            ['name' => 'Food'],

            // Add more rows as needed
        ]);
    }
}
