<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventDetail>
 */
class EventDetailFactory extends Factory
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
            'session' => $faker->numberBetween(5, 10),
            'seat' => $faker->numberBetween(10, 100),
            'short_description' => $faker->text($faker->numberBetween(200, 255)),
            'benefit' => $faker->paragraph($faker->numberBetween(3, 5)),
            'whatsapp_link' => 'https://www.whatsapp.com/',
            'zoom_link' => 'https://zoom.us/'
        ];
    }
}
