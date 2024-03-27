<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function kamusHuruf()
    {
        return view('kamusHuruf');
    }

    public function kamus()
    {
        return view('kamus');
    }
}
