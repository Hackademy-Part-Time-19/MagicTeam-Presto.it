<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::factory(1)->create([
                'name' => 'Admin',
                'email' => 'admin@presto.it',
                'is_revisor' => '1',
            ]);

        User::factory(10)->create();

    }
}
