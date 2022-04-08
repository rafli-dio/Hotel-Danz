<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['name_customer','email_customer','no_handphone_customer','long_name','room_type_id','total_room','check_in','check_out'];

    public function room_type(){
        return $this->belongsTo(RoomType::class);
    }
}
