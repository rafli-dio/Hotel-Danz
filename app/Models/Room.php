<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = ['roomtype_id','room_people','room_no','room_image','price'];

    public function roomtype () 
    {
        return $this->belongsTo(RoomType::class);
    }


}
