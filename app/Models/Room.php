<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = ['room_type_id','room_facility_id','room_people','room_no','room_price','room_photo'];

    public function facility_room () 
    {
        return $this->belongsTo(FacilityRoom::class);
    }
    public function room_type () 
    {
        return $this->belongsTo(RoomType::class);
    }


}
