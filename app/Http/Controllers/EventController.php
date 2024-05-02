<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventDetail;
use App\Models\EventSchedule;
use App\Models\EventType;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\VolunteerEventController;
use App\Models\VolunteerEvent;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::with('instructors', 'event_types', 'event_schedules')->get();
        $VolunteerEvent = VolunteerEvent::with('volunteer_event_details', 'volunteer_event_schedule')->get();
        // $VolunteerEvent = VolunteerEventController::getVolunteerEvents();
        return view('acara', ['daftarAcara' => $event], ['daftarVolunteer' => $VolunteerEvent]);
    }

    public function show($id)
    {
        $event = Event::with('instructors', 'event_types', 'event_schedules')->findOrFail($id);
        return view('detailAcara', ['acara' => $event]);
    }    

    public function create()
    {
        $eventType = EventType::select('id', 'name')->get();
        $instructor = Instructor::select('id', 'name')->get();
        return view('tambahAcara', ['daftarTipeAcara' => $eventType, 'daftarPengajar' => $instructor]);
    }

    public function store(Request $request)
    {
        $photoFileName = time() . '-' . $request->title . '.' . $request->photo->extension();
        $request->photo->move(public_path('assets\fotoAcara'), $photoFileName);

        session()->put('photo_file_name', $photoFileName);
        session()->put('event_data', $request->except('photo'));
        
        return redirect('/tambahJadwalAcara?jumlahSesi=' . $request->session);
    }

    
}
