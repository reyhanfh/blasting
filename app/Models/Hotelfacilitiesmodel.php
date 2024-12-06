<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelfacilitiesmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_hotelfacilities';
    protected $fillable = ['idhotel','idfacility','created_at','updated_at'];
}
