<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Guest;
use App\Models\Room;
use App\Models\FacilityHotel;
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
        $facilityhotels = FacilityHotel::all();
        return view('guest.home',compact('rooms','facilityhotels'));
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
        $reservations = Reservation::find($id);
        return view('guest.reservation',compact('rooms','reservations'));
    }

    public function confirm($id)
    {
        $reservations = Reservation::find($id);
        return view('guest.confirm',compact('reservations'));
    }


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

        $id = Reservation::orderBy('id', 'DESC')->get();

        return redirect('/confirm/'. $id[0]->id);
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
        $guests = Guest::find($id);
        return view('admin.guest.edit',compact('guests'));
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
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'long_name' => 'required',
            'gender' => 'required',
            'age' => 'required',
        ]);
        Guest::find($id)->update($request->all());
        return redirect('/admin/guest/');
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
