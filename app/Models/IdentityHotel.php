<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentityHotel extends Model
{
    use HasFactory;
    protected $fillable = ['name_hotel','hotel_description','hotel_address'];
}
