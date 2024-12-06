<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelmodel;

class Refregionmodel extends Model
{
    use HasFactory;
    protected $table="tbl_region";
    protected $fillable=['regionName'];

    public function hotel(){
        return $this->hasMany(Hotelmodel::class,'regionid','id');
    }
}
