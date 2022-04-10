<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        $roomtypes = RoomType::all();
        return view('admin.room.index',compact('rooms','roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtypes = RoomType::all();
        return view('admin.room.create',compact('roomtypes'));
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
            'roomtype' => 'required',
            'room_people' => 'required',
            'room_no' => 'required',
            'room_image' => 'image|file|max:10000|mimes:jpg,jpeg,png',
            'price' => 'required',
        ]);

        $file_name = $request->room_image->getClientOriginalName();
        $room_image = $request->room_image->storeAs('post-room-image',$file_name);

        Room::create([
            'roomtype_id' => $request->roomtype,
            'room_people' => $request->room_people,
            'room_no' => $request->room_no,
            'room_image' => $room_image,
            'price' => $request->price,
        ]);

        return redirect('admin/room');
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
        $rooms = Room::find($id);
        $roomtypes = RoomType::where('id', '!=',$rooms->roomtype->id)->get();
        return view('/admin/room/edit',compact('rooms','roomtypes'));
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
            'roomtype_id' => 'required',
            'room_people' => 'required',
            'room_no' => 'required',
            'price' => 'required',
        ]);
        Room::find($id)->update($request->all());
        return redirect('/admin/room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Room::find($id)->delete();
        return redirect('/admin/room');
    }
}
