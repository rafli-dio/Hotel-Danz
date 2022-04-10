<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = ['name','facilityroom1_id','facilityroom2_id','facilityroom3_id'];

    public function facilityroom1() {
        return $this->belongsTo(FacilityRoom::class, 'facilityroom1_id');
    }

    public function facilityroom2() {
        return $this->belongsTo(FacilityRoom::class, 'facilityroom2_id');
    }

    public function facilityroom3() {
        return $this->belongsTo(FacilityRoom::class, 'facilityroom3_id');
    }

    public function room() {
        return $this->hasMany(Room::class);
    }
}
