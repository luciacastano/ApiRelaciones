<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_id' => fake()->numberBetween(1, 10),
            'name' => fake()->randomElement(['car', 'plane', 'train', 'boat']),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 0, 99),
            'rating' => fake()->randomFloat(1, 0, 9),
        ];
    }
}
