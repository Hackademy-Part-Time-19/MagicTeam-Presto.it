<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddArticles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory(10)->create([

            'is_accepted' => 1,

        ]);
        Article::factory(10)->create([

            'is_accepted' => null,

        ]);
    }
}
