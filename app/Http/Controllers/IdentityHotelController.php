<?php

namespace App\Http\Controllers;

use App\Models\IdentityHotel;
use Illuminate\Http\Request;
class IdentityHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identityhotels = IdentityHotel::all();
        return view('admin.identity-hotel.index',compact('identityhotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  \App\Models\IdentityHotel  $identityHotel
     * @return \Illuminate\Http\Response
     */
    public function show(IdentityHotel $identityHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IdentityHotel  $identityHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(IdentityHotel $identityHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IdentityHotel  $identityHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IdentityHotel $identityHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IdentityHotel  $identityHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(IdentityHotel $identityHotel)
    {
        //
    }
}
