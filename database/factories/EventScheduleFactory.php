<?php

namespace Database\Factories;

use DateTime;
use Faker\Factory as faker;
use App\Models\EventSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventSchedule>
 */
class EventScheduleFactory extends Factory
{
    

    public function definition()
    {

        $faker = faker::create();
        $currentDate = new DateTime();

        $latestEventScheduleDate = EventSchedule::max('date');

        if ($latestEventScheduleDate == null) {
            $date = $currentDate;
        } else {
            $latestDatePlusOne = (new DateTime($latestEventScheduleDate))->modify('+1 day');
            $endDateInterval = $latestDatePlusOne->modify('+7 days');
            $date = $faker->dateTimeBetween($latestDatePlusOne, $endDateInterval);
        }

        $startHour = $faker->numberBetween(7, 17); 
        $timeStartString = sprintf('%02d:00:00', $startHour); 
        $endHour = $startHour + $faker->numberBetween(1, 4);
        $timeEndString = sprintf('%02d:00:00', $endHour); 

        return [
            'date' => $date,
            'time_start' => $timeStartString,
            'time_end' => $timeEndString
        ];
    }
}
