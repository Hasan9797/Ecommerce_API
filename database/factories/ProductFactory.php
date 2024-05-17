<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => [
                'en' => fake()->name(),
                'uz' => fake()->name,
            ],
            'price' => rand(1000, 1000000),
            'description' => [
                'en' => fake()->text(),
                'uz' => 'Mebillar Sizga yoqadigan chotke laridan Pushaymon bo`lmaysiz',
            ],
            'category_id' => rand(1, 5),
        ];
    }
}
