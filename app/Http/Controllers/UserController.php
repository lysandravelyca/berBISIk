<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersEvent;
use App\Models\UsersVolunteerEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $userId = Auth::user()->id;

        $userEvent = UsersEvent::with('events', 'events.event_types', 'events.instructors', 'events.event_schedules')
                                ->where('user_id', $userId)->get();

        $userVolunteerEvent = UsersVolunteerEvent::with('volunteer_events', 'volunteer_events.volunteer_event_schedules')
                                ->where('user_id', $userId)->get();
                                
        return view('/profil', ['daftarAcaraUser' => $userEvent, 'daftarAcaraRelawanUser' => $userVolunteerEvent]);

    }
}
