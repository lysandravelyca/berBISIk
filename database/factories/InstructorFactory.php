<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InstructorFactory extends Factory
{

    public function definition()
    {
        $faker = faker::create();

        return [
            'name' => $faker->name(),
            'description' => $faker->text(300),
            'job' => $faker->jobTitle()
        ];
    }
}
