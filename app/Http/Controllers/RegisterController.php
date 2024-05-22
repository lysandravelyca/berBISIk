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

    public function store(registerRequest $request){
        
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
            $user->save();
    
            return redirect()->intended('/');

    }
}
