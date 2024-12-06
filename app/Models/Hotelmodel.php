<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accomodationtypemodel;
use App\Models\Refregionmodel;
use App\Models\Refkotamodel;
use App\Models\Brandmodel;
use App\Models\Hotelroommodel;
use App\Models\Rateplanhotelmodel;

class Hotelmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_hotel';
    protected $fillable = 
    [
        'accomodationtypeid','brandid','regionid','kotaid','hotelcode','hotelname','slug','star','address',
        'zipcode','phone','phone2','nowa','nofax','aktif','long','latt'
    ];

    public function accomodation(){
        return $this->belongsTo(accomodationtypemodel::class,'accomodationtypeid','id');
    }

    public function brand(){
        return $this->belongsTo(Brandmodel::class,'brandid','id');
    }

    public function region(){
        return $this->belongsTo(Refregionmodel::class,'regionid','id');
    }    

    public function kota(){
        return $this->belongsTo(Refkotamode::class,'kotaid','id');
    }

    public function hotelroom(){
        return $this->hasMany(Hotelroommodel::class,'idhotel','id');
    }

    public function rateplan()
    {
        return $this->hasMany(Rateplanhotelmodel::class,'idhotel','id');
    }

}
