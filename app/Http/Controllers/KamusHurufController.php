<?php

namespace App\Http\Controllers;

use App\Models\KamusHuruf;
use Illuminate\Http\Request;

class KamusHurufController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     /*

     aku ngikut tutorial https://www.youtube.com/watch?v=_AQVAuKnQ8U
     cmn bingung kenapa return nya salah

    public function search(Request $request){
         $search =  $request->search;

         $posts = KamusHuruf::where(function($query) use ($search) {
             $query->where("huruf","like","%".$search."%");
         })->get();

         return view('kamusHuruf', compact('posts', 'search'));
    }
    */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KamusHuruf  $kamusHuruf
     * @return \Illuminate\Http\Response
     */
    public function show(KamusHuruf $kamusHuruf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KamusHuruf  $kamusHuruf
     * @return \Illuminate\Http\Response
     */
    public function edit(KamusHuruf $kamusHuruf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KamusHuruf  $kamusHuruf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KamusHuruf $kamusHuruf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KamusHuruf  $kamusHuruf
     * @return \Illuminate\Http\Response
     */
    public function destroy(KamusHuruf $kamusHuruf)
    {
        //
    }
}
