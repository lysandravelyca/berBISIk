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
            'Berpeluang dalam BISINDO: Menjadi Bagian dari Tim Panitia dan Penerjemah',
            'Selangkah Awal dalam Dunia Bisindo: Workshop untuk Calon Panitia',
            'Membangun Jembatan Komunikasi',
            'Mengajar BISINDO untuk Pemula',
            'Menjadi Relawan Acara dan Penerjemah Profesional'
        ];

        return [
            'title' => $faker->randomElement($titles),
            'location' => $faker->address()
        ];
    }
}
