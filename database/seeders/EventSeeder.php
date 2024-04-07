<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();
        Event::factory()->count(20)->create();
    }
}
