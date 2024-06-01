<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(registerRequest $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => ['required'], 
        ]);

        // $data = [
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ];

        // User::create($data);

        $user = new User;
        $user->role_id = '1';
        $user->name = fake()->name();
        $user->email = $request->email;
        $user->phone = '123';
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->last_activity = Carbon::now();
        $user->save();

        // if (Auth::attempt($credentials)) {

        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
    
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/');

    }
}
