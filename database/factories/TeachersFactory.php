<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>$this->faker->name(),
            "lastName"=>$this->faker->lastName(),
            "lastName"=>$this->faker->lastName(),
            "age"=>$this->faker->numberBetween(7,40),
        ];
    }
}
