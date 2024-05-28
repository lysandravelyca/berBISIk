<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Instructor;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Event::truncate();
        Schema::enableForeignKeyConstraints();
        
        Event::factory()->count(20)->create([
            'status_id' => 1
        ]);

        Event::factory()->count(10)->create([
            'status_id' => 2
        ]);

        // Event::factory()->count(20)->create();

        // $events = Event::with('event_types', 'event_details', 'statuses', 'event_schedules');
        // $currentDate = Carbon::now();

        // if($events->event_schedules->date->isBefore($currentDate)){
        //     Event::factory()->create([
        //         'status' => 2
        //     ]);
        // }
        // else{
            
        // }
    }
}
