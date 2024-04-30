<?php

namespace App\Http\Controllers;

use App\Models\VolunteerEvent;
use Illuminate\Http\Request;

class VolunteerEventController extends Controller
{
    public function index()
    {
        $event = VolunteerEvent::with('volunteer_event_schedules')->get();
        return view('acara', ['daftarRelawan' => $event]);
    }
}
