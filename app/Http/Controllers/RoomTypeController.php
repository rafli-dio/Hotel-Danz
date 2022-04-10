<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\FacilityRoom;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes = RoomType::all();
        // $facilityrooms = FacilityRoom::find($id);
        return view('admin.room-type.index',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilityrooms = FacilityRoom::all();
        return view('admin.room-type.create',compact('facilityrooms'));
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
            'name' => 'required',
            'facilityroom1' => 'required',
            'facilityroom2' => 'required',
            'facilityroom3' => 'required',
        ]);

        RoomType::create([
            'name' =>  $request->name,
            'facilityroom1_id' => $request->facilityroom1,
            'facilityroom2_id' => $request->facilityroom2,
            'facilityroom3_id' => $request->facilityroom3,
        ]);
        return redirect('admin/room-type');
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
        $roomtypes = RoomType::find($id);
        $facilityrooms1 = FacilityRoom::where('id', '!=', $roomtypes->facilityroom1->id)->get();
        $facilityrooms2 = FacilityRoom::where('id', '!=', $roomtypes->facilityroom2->id)->get();
        $facilityrooms3 = FacilityRoom::where('id', '!=', $roomtypes->facilityroom3->id)->get();
        return view('/admin/room-type/edit',compact('roomtypes','facilityrooms1','facilityrooms2','facilityrooms3'));
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
            'name' => 'required',
            'facilityroom1_id' => 'required',
            'facilityroom2_id' => 'required',
            'facilityroom3_id' => 'required',
        ]);
        RoomType::find($id)->update($request->all());
        return redirect('/admin/room-type/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RoomType::find($id)->delete();
        return redirect('/admin/room-type');
    }
}
