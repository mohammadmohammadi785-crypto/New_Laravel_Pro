<?php

namespace Database\Factories;

use App\Models\sinf;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<sinf>
 */
class sinfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title"=>$this->faker->sentence(8),
            "description"=>$this->faker->text(50),
        ];
    }
}
