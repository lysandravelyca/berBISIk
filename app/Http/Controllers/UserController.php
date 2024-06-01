<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersEvent;
use App\Models\UsersVolunteerEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function show()
    {
        $currentDate = Carbon::now();
        $user = Auth::user();
        $userId = Auth::user()->id;
        $userRoleId = $user->role_id;

        $userEvent = UsersEvent::with('events', 'events.event_types', 'events.instructors', 'events.event_schedules')
            ->where('user_id', $userId)
            // ->whereHas('events.event_schedules', function ($query) use ($currentDate) {
            //     $query->where('date', '>', $currentDate);
            // })
        ->get();

        $userVolunteerEvent = UsersVolunteerEvent::with('volunteer_events', 'volunteer_events.volunteer_event_schedules')
                                ->where('user_id', $userId)->get();
        
        $loggedInUsers = null;
        if ($userRoleId == 2) {
            $loggedInUsers = User::all()->map(function ($user) {
                $user->isActive = $user->last_activity ? Carbon::parse($user->last_activity)->gt(Carbon::now()->subMinutes(1)) : false;
                return $user;
            });
        }
                                
        return view('profil', ['daftarAcaraUser' => $userEvent, 'daftarAcaraRelawanUser' => $userVolunteerEvent, 'loggedInUsers' => $loggedInUsers]);

    }

    public function edit()
    {
        $user = Auth::user();
        return view('editProfil', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            
        ]);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/fotoUser'), $filename);
            $user->photo = $filename;
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diubah');
    }
}
