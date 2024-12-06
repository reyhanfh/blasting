<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelmodel;
use App\Models\Roomtypemodel;
use App\Models\Roomamenitiesmodel;

class Hotelroommodel extends Model
{
    use HasFactory;
    
    protected $table = 'tbl_hotelroom';
    protected $fillable = ['idhotel','idroomtype','roomsize','allotment','baserate','bedtype','capacity','deskripsi','photo','aktif'];

    public function hotel()
    {
        return $this->belongsTo(Hotelmodel::class, 'idhotel', 'id');
    }

    public function roomtype()
    {
        return $this->belongsTo(Roomtypemodel::class, 'idroomtype', 'id');
    }

    public function getStatus(): string
    {
        if ($this->aktif)
            return 'Aktif';
        else 
            return 'Tidak Aktif';
    }

    public function amenities()
    {
        return $this->hasMany(Roomamenitiesmodel::class,'idroom','id');
    }
}
