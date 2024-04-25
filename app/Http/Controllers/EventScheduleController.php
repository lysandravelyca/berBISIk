<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventSchedule;

class EventScheduleController extends Controller
{
    public function create()
    {
        return view('tambahJadwalAcara');
    }

    public function store(Request $request)
    {
        $event_id = $request->event_id;
        $session = $request->session;
        for ($i = 0; $i < $session; $i++) {
            $eventSchedule = new EventSchedule;
            $eventSchedule->event_id = $event_id;
            $eventSchedule->name = $request->input('name'.$i);
            $eventSchedule->date = $request->input('date'.$i);
            $eventSchedule->time_start = $request->input('time_start'.$i);
            $eventSchedule->time_end = $request->input('time_end'.$i);
            $eventSchedule->save();
        }
        return redirect('/acara');
    }
}
