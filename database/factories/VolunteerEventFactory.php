<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VolunteerEvent>
 */
class VolunteerEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();

        $titles = [
            'Menjadi Bagian dari Tim Panitia dan Penerjemah',
            'Workshop untuk Calon Panitia',
            'Membangun Jembatan Komunikasi',
            'Mengajar BISINDO untuk Pemula',
            'Menjadi Relawan Acara dan Penerjemah Profesional'
        ];

        $photo = [
            'Sample1.jpg',
            'Sample2.jpg',
            'Sample3.jpg',
            'Sample4.jpg',
            'Sample5.jpg',
            'Sample6.jpg',
            'Sample7.jpg',
            'Sample8.jpg',
            'Sample9.jpg',
        ];

        return [
            'title' => $faker->randomElement($titles),
            'location' => $faker->address(),
            'photo' =>$faker->randomElement($photo)            
        ];
    }
}
