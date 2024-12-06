<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelfacilitymodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_hotelfaicility';
    protected $fillable = ['facilityName'];
}
