<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VolunteerEventDetail>
 */
class VolunteerEventDetailFactory extends Factory
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
            'criteria' =>$faker->text($faker->numberBetween(50, 100)),
            'benefit' =>$faker->paragraph(1),
            'short_description' =>$faker->text($faker->numberBetween(200, 255)),
            'seat' =>$faker->numberBetween(1,40),
            'whatsapp_link' => 'https://www.whatsapp.com/',
            'zoom_link' => 'https://zoom.us/'
        ];
    }
}
