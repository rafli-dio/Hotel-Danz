<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityRoom extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    

    public function room () {
        return $this->hasMany(Room::class);
    }
}
