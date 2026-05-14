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
            "name"=>$this->faker->sentence(2),
            "price"=>$this->faker->numberBetween(40,800),
            "stock"=>$this->faker->numberBetween(3,18)
        ];
    }
}
