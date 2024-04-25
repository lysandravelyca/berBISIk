<?php

namespace Database\Factories;

use App\Models\EventType;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    public function definition()
    {
        $faker = faker::create();

        $types = EventType::pluck('id')->toArray();
        $instructor = Instructor::pluck('id')->toArray();

        $titles = [
            'Pengajaran Bahasa Isyarat Indonesia',
            'Strategi Pengajaran BISINDO yang Efektif',
            'Kursus Dasar BISINDO',
            'Mengajar BISINDO untuk Pemula',
            'Inklusi dengan Bahasa Isyarat',
            'Pengembangan Materi BISINDO',
            'Pelatihan Guru Bahasa Isyarat',
            'Pembelajaran BISINDO Secara Online',
            'Diskusi Komunitas BISINDO',
            'Pembelajaran Sederhana dan Praktis BISINDO'
        ];

        return [
            'event_type_id' => $faker->randomElement($types),
            'instructor_id' => $faker->randomElement($instructor),
            'title' => $faker->randomElement($titles),
            'price' => $faker->numberBetween(30, 150) * 1000,
            'location' => $faker->address()
        ];
    }
}
