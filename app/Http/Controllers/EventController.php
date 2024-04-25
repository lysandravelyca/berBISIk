<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventSchedule;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::with('instructors', 'event_types', 'event_schedules')->get();
        $event_schedule = EventSchedule::get();
        return view('acara', ['daftarAcara' => $event, 'jadwal' => $event_schedule]);
    }
}
