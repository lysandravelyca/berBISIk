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
            $date = $currentDate->format('Y-m-d');
        } else {
            // $latestEventScheduleDate = new DateTime($latestEventScheduleDate); // Convert to DateTime object
            // $latestEventScheduleDateString = $latestEventScheduleDate->format('Y-m-d');
            $latestDatePlusOne = (new DateTime($latestEventScheduleDate))->modify('+1 day');
            $endDateInterval = $latestDatePlusOne->modify('+7 days');
            $date = $faker->dateTimeBetween($latestDatePlusOne, $endDateInterval)->format('Y-m-d');
        }

        $timeStart = date('H:00:00', strtotime('07:00:00') + ($faker->numberBetween(0, 11)*3600));
        $timeEnd = date('H:00:00', strtotime($timeStart) + ($faker->numberBetween(1, 3)*3600));

        return [
            'date' => $date,
            'time_start' => $timeStart,
            'time_end' => $timeEnd
        ];
    }
}
