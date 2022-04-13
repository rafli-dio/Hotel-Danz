<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\Room;
use App\Models\RoomType;
class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('guest.home',compact('rooms'));
    }

    public function indexAdmin() {
        $guests = Guest::all();
        return view('admin.guest.index',compact('guests'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $rooms = Room::find($id);
        return view('guest.reservation',compact('rooms'));
    }

    public function createGuest() {
        return view('admin.guest.create');
    }

    // public function createGuest() {
    //     return 
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'room' => 'required',
            'name' => 'required',
            'email' => 'required',
            'no_handphone' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        // dd($request);

        Reservation::create([
            'room_id' => $request->room,
            'name' => $request->name,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        return redirect('/guest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Guest::find($id)->delete();
        return redirect('/admin/guest');
    }
}
