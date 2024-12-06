<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelroommodel;
use App\Models\Rateplanmodel;

class Roomtypemodel extends Model
{
    use HasFactory;
    protected $table = "tbl_roomtype";
    protected $fillable = ['code','name','aktif'];

    public function hotelroom()
    {
        return $this->hasMany(hotelroommodel::class,'idroomtype','id');
    }    
}
