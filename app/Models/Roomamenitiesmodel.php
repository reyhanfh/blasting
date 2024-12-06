<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelroommodel;
use App\Models\Amenitiesmodel;

class Roomamenitiesmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_roomamenities';
    protected $fillable = ['idroom','idamenities'];

    public function hotelroom()
    {
        return $this->belongsTo(Hotelroommodel::class,'idroom','id');
    }

    public function amenities()
    {
        return $this->belongsTo(Amenitiesmodel::class,'idamenities','id');
    }
}
