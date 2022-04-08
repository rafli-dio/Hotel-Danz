<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = ['name','room_facility1_id','room_facility2_id','room_facility3_id'];
    // protected $fillable = ['name','room_facility1_id'];

    public function facility_room1() {
        return $this->belongsTo(FacilityRoom::class, 'room_facility1_id');
    }

    public function facility_room2() {
        return $this->belongsTo(FacilityRoom::class, 'room_facility2_id');
    }

    public function facility_room3() {
        return $this->belongsTo(FacilityRoom::class, 'room_facility3_id');
    }

    public function room() {
        return $this->hasOne(Room::class);
    }
}
