<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityHotel;
class FacilityHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilityhotels = FacilityHotel::all();
        return view('admin.facility-hotel.index',compact('facilityhotels'));
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


        // dd('berhasil');


        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'image|file|max:10000|mimes:jpg,jpeg,png',
        ]);

        $file_name = $request->image->getClientOriginalName();
        $image = $request->image->storeAs('post-facility-hotel-image',$file_name);

        FacilityHotel::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $image,
        ]);
        return redirect('admin/facility-hotel');
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
        $facilityhotels = FacilityHotel::find($id);
        return view('/admin/facility-hotel/edit',compact('facilityhotels'));
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
            'desc' => 'required',
            'image' => 'image|file|max:10000|mimes:jpg,jpeg,png'
        ]);

        if($request->image) {
            $file_name = $request->image->getClientOriginalName();
            $image = $request->image->storeAs('post-facility-hotel-image',$file_name);
    
            $facilityhotels = FacilityHotel::find($id)
            ->update([
                "name" => $request->name,
                "desc" => $request->desc,
                "image" => $image,
            ]);
        } else {
            $facilityhotels = FacilityHotel::find($id)
            ->update([
                "name" => $request->name,
                "desc" => $request->desc,
            ]);
        }

        

        return redirect('/admin/facility-hotel/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FacilityHotel::find($id)->delete();
        return redirect('/admin/facility-hotel');
    }
}
