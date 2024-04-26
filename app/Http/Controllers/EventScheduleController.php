<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $i = 0;
        // dd(gettype(Carbon::parse($request->input('time_start'.$i))));
        // dd(request()->all());
        // $event_id = ;
        for ($i = 0; $i < $request->session; $i++) {
            $eventSchedule = new EventSchedule;
            $eventSchedule->event_id = $request->event_id;
            
            $eventSchedule->name = $request->input('name'.$i);
            $eventSchedule->date = $request->input('date'.$i);
            $eventSchedule->time_start = $request->input('time_start'.$i);
            $eventSchedule->time_end =$request->input('time_end'.$i);
            
            $eventSchedule->save();
            // dd($eventSchedule->event_id);
        }
        return redirect('/acara');
    }
}
