<?php

namespace App\Http\Controllers;

use App\Models\VolunteerEvent;
use App\Models\VolunteerEventDetail;
use App\Models\VolunteerEventSchedule;
use Illuminate\Http\Request;

class VolunteerEventController extends Controller
{
    public function show($id)
    {
        $volunteer = VolunteerEvent::with('volunteer_event_schedules')->findOrFail($id);
        return view('detailVolunteer', ['volunteer' => $volunteer]);
    }

    public function create()
    {
        return view('/Volunteer/tambahVolunteer');
    }

    public function store (Request $request)
    {
        $photoFile = time() . '-' . $request->title . '.' . $request->photo->extension();
        $request->photo->move(public_path('assets\fotoVolunteer'), $photoFile);

        session()->put('photo_file_name', $photoFile);
        session()->put('volunteer_event_data', $request->except('photo'));

        $volunteerData = session()->get('volunteer_event_data');
        $fileName = session()->get('photo_file_name');

        $volunteer = new VolunteerEvent;
        $volunteer->title = $volunteerData['title'];
        $volunteer->location = $volunteerData['location'];
        $volunteer->photo = $fileName;
        $volunteer->save();

        $volunteerDetail = new VolunteerEventDetail;
        $volunteerDetail->volunteer_event_id = $volunteer->id;
        $volunteerDetail->criteria = $volunteerData['criteria'];
        $volunteerDetail->benefit = $volunteerData['benefit'];
        $volunteerDetail->short_description = $volunteerData['short_description'];
        $volunteerDetail->seat = $volunteerData['seat'];
        $volunteerDetail->whatsapp_link = $volunteerData['whatsapp_link'];
        $volunteerDetail->zoom_link = $volunteerData['zoom_link'];
        $volunteerDetail->save();

        $volunteerSchedule = new VolunteerEventSchedule;
        $volunteerSchedule->volunteer_event_id = $volunteer->id;
        $volunteerSchedule->name = $volunteerData['name'];
        $volunteerSchedule->date = $volunteerData['date'];
        $volunteerSchedule->time_start = $volunteerData['time_start'];
        $volunteerSchedule->time_end = $volunteerData['time_end'];
        $volunteerSchedule->save();

        return redirect('/acara');
    }

    public function edit(Request $request, $id)
    {
        $volunteer = VolunteerEvent::with('volunteer_event_details', 'volunteer_event_schedules')->findOrFail($id);
        return view('/Volunteer/ubahVolunteer', ['volunteer' => $volunteer] );
    }

    public function update(Request $request, $id)
    {
        if($request->photo != null){
            $photoFile = time() . '-' . $request->title . '.' . $request->photo->extension();
            $request->photo->move(public_path('assets\fotoVolunteer'), $photoFile);
        }
        else{
            $photoFile = null;
        }
            
        $volunteerData = session()->get('volunteer_event_data');
        $fileName = session()->get('photo_file_name');

        $volunteer = VolunteerEvent::findOrFail($id);
        $volunteer->title = $volunteerData['title'];
        $volunteer->location = $volunteerData['location'];
        $volunteer->photo = $fileName;
        $volunteer->save();

        $volunteerDetail = VolunteerEventDetail::where('volunteer_event_id', $id)->firstOrFail();
        $volunteerDetail->criteria = $volunteerData['criteria'];
        $volunteerDetail->benefit = $volunteerData['benefit'];
        $volunteerDetail->short_description = $volunteerData['short_description'];
        $volunteerDetail->seat = $volunteerData['seat'];
        $volunteerDetail->whatsapp_link = $volunteerData['whatsapp_link'];
        $volunteerDetail->zoom_link = $volunteerData['zoom_link'];
        $volunteerDetail->save();

        $volunteerSchedule = VolunteerEventSchedule::where('volunteer_event_id', $id)->firstOrFail();
        $volunteerSchedule->name = $volunteerData['name'];
        $volunteerSchedule->date = $volunteerData['date'];
        $volunteerSchedule->time_start = $volunteerData['time_start'];
        $volunteerSchedule->time_end = $volunteerData['time_end'];
        $volunteerSchedule->save();

        return redirect('/acara');
        
    }

    public function delete($id)
    {
        $volunteer = VolunteerEvent::findOrFail($id);
        return view('/Volunteer/hapusVolunteer', ['volunteer' => $volunteer]);
    }

    public function destroy($id)
    {
        $deleteEvent = VolunteerEvent::findOrFail($id);
        $deleteEvent->volunteer_event_details()->delete();
        $deleteEvent->volunteer_event_schedules()->delete();
        $deleteEvent->delete();

        return redirect('/acara');
    }
}
