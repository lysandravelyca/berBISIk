<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Instructor;
use App\Models\UsersEvent;
use App\Models\EventDetail;
use Illuminate\Http\Request;
use App\Models\EventSchedule;
use App\Models\VolunteerEvent;
use App\Models\VolunteerEventDetail;
use Illuminate\Support\Facades\Auth;
use App\Models\VolunteerEventSchedule;
use App\Http\Requests\tambahAcaraRequest;
use App\Http\Controllers\VolunteerEventController;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::with('instructors', 'event_types', 'event_schedules')->get();
        $VolunteerEvent = VolunteerEvent::with('volunteer_event_schedules')->get();
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
        $instructor = Instructor::select('id', 'name')->orderBy('name', 'asc')->get();
        return view('tambahAcara', ['daftarTipeAcara' => $eventType, 'daftarPengajar' => $instructor]);
    }
    
    public function store(tambahAcaraRequest $request)
    {
        // if($request->photo){
            $photoFileName = time() . '-' . $request->title . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets\fotoAcara'), $photoFileName);
            session()->put('photo_file_name', $photoFileName);
        // }
        
        session()->put('event_data', $request->except('photo'));
        
        return redirect('/tambahJadwalAcara?jumlahSesi=' . $request->session);
    }

    public function edit(Request $request, $id)
    {
        
        $event = Event::with('event_types', 'event_details', 'event_schedules', 'instructors')->findOrFail($id);
        $eventType = EventType::where('id', '!=', $event->event_type_id)->get(['id', 'name']);
        $instructor = Instructor::where('id', '!=', $event->instructor_id)->get(['id', 'name']);
        return view('ubahAcara', ['acara' => $event, 'daftarTipeAcara' => $eventType, 'daftarPengajar' => $instructor]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        if($request->photo != null){
            $photoFileName = time() . '-' . $request->title . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets\fotoAcara'), $photoFileName);
        }
        else {
            $photoFileName = "null";
        }

        // session()->put('event_id', $id );
        session()->put('photo_file_name', $photoFileName);
        session()->put('event_data', $request->except('photo'));
        
        return redirect('/ubahJadwalAcara'.'/'. $id . '?jumlahSesi=' . $request->session);
    }

    public function delete($id)
    {
        $event = Event::FindOrFail($id);
        return view('/hapusAcara', ['acara' => $event]);
    } 

    public function destroy($id)
    {

        $deleteEvent = Event::FindOrFail($id);
        $deleteEvent->event_details()->delete();
        $deleteEvent->event_schedules()->delete();
        $deleteEvent->reviews()->delete();
        $deleteEvent->users_events()->delete();
        $deleteEvent->delete();

        // if($deleteStudent){
        //     Session::flash('status', 'success');
        //     Session::flash('message', 'delete student success!');
        // }

        return redirect('/acara');
        
    }

    public function register($id)
    {
        return view('/daftarAcara', compact('id'));
    }

    public function confirm(Request $request, $id)
    {
       $usersEvent = new UsersEvent();
       $usersEvent->user_id = Auth::user()->id;
       $usersEvent->event_id = $id;
       $usersEvent->save();
       return redirect('/profil');
    }
    
}
