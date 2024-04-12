<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->word(),
            'category_id' => fake()->numberBetween(1,10),
            'description' => fake()->text(),
            'user_id' => fake()->numberBetween(1,10),
            'is_accepted' => fake()->numberBetween(0,1),
            'price' => fake()->numberBetween(10,400),
            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
