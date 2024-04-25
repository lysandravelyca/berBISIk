<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventDetail;
use App\Models\EventSchedule;
use App\Models\EventType;
use App\Models\Instructor;
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
        $eventType = EventType::select('id', 'name')->get();
        $instructor = Instructor::select('id', 'name')->get();
        return view('tambahAcara', ['daftarTipeAcara' => $eventType, 'daftarPengajar' => $instructor]);
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->event_type_id = $request->event_type_id;
        $event->instructor_id = $request->instructor_id;
        $event->title = $request->title;
        $event->price = $request->price;
        $event->location = $request->location;
        $event->photo = $request->photo;
        $event->save();

        $eventDetail = new EventDetail;
        $eventDetail->event_id = $event->id;
        $eventDetail->session = $request->session;
        $eventDetail->seat = $request->seat;
        $eventDetail->short_description = $request->short_description;
        $eventDetail->benefit = $request->benefit;
        $eventDetail->whatsapp_link = $request->whatsapp_link;
        $eventDetail->zoom_link = $request->zoom_link;
        $eventDetail->save();

        return redirect('/tambahJadwalAcara?id=' . $event->id . '&jumlahSesi=' . $eventDetail->session);
    }

    
}
