<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\KamusController;
use App\Http\Controllers\DictionaryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

Route::get('/kamus', function(){
    return view('kamus');
});

// Route::get('/acara', function(){
//     return view('acara');
// });

Route::get('/tentangKami', function(){
    return view('tentangKami');
});

Route::get('/profil', function(){
    return view('profil');
});

Route::get('/kamusHuruf', [KamusController::class, 'kamusHuruf'])->name('kamus.huruf');

// Route::get('/kamus', [KamusController::class, 'kamus'])->name('kamus');

Route::get('/kamus', [DictionaryController::class, 'index'])->name('kamus');

Route::get('/acara', [EventController::class, 'index']);
Route::get('/acara/{id}', [EventController::class, 'show']);
Route::get('/acara-add', [EventController::class, 'create']);

