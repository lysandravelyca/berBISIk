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

        $job_titles = [
            'Terjemah Bahasa Isyarat',
            'Guru Bahasa Isyarat',
            'Penerjemah Tuna Rungu',
            'Asisten Komunikasi Bahasa Isyarat',
            'Pelatih Komunikasi Tuna Rungu',
            'Konselor Bahasa Isyarat',
            'Interpreter Bahasa Isyarat',
            'Koordinator Komunikasi Tuna Rungu',
            'Pengajar Bahasa Isyarat',
            'Komunikator Tuna Rungu'
        ];
        

        return [
            'name' => $faker->name(),
            'description' => $faker->text(300),
            'job' => $faker->randomElement($job_titles)
        ];
    }
}
