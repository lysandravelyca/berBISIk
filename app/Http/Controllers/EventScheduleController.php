<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\EventDetail;
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

        $eventData = session()->get('event_data');
        $fileName = session()->get('photo_file_name');

        $event = new Event;
        $event->event_type_id = $eventData['event_type_id']; 
        $event->instructor_id = $eventData['instructor_id'];
        $event->title = $eventData['title'];
        $event->price = $eventData['price'];
        $event->location = $eventData['location'];
        $event->photo = $fileName;
        $event->save();

        $eventDetail = new EventDetail;
        $eventDetail->event_id = $event->id;
        $eventDetail->session = $eventData['session'];
        $eventDetail->seat = $eventData['seat'];
        $eventDetail->short_description = $eventData['short_description'];
        $eventDetail->benefit = $eventData['benefit'];
        $eventDetail->whatsapp_link = $eventData['whatsapp_link'];
        $eventDetail->zoom_link = $eventData['zoom_link'];
        $eventDetail->save();


        for ($i = 0; $i < $eventDetail->session; $i++) {
            $eventSchedule = new EventSchedule;
            $eventSchedule->event_id = $event->id;
            $eventSchedule->name = $request->input('name'.$i);
            $eventSchedule->date = $request->input('date'.$i);
            $eventSchedule->time_start = $request->input('time_start'.$i);
            $eventSchedule->time_end =$request->input('time_end'.$i);
            $eventSchedule->save();
        }

        session()->forget('event_data');
        return redirect('/acara');
    }
}
