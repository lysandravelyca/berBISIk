<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();

        return [
            'rating' => $this->faker->randomFloat(1, 1, 5), 
            'comment' => substr($faker->paragraph($faker->numberBetween(2, 5)), 0, 255)
        ];
    }
}
