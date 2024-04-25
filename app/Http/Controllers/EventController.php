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
        return view('acara', ['daftarAcara' => $event]);
    }

    public function show($id)
    {
        $event = Event::with('instructors', 'event_types', 'event_schedules')->get();
        return view('detailAcara', ['daftarAcara' => $event]);
    }

    public function create()
    {

    }
}
