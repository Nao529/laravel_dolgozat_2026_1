<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'type_id' => fake()->numberBetween(1,10),
            'name' => fake()->sentence(),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(1,100),
        ];
    }
}
