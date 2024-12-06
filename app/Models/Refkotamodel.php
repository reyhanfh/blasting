<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelmodel;

class Refkotamodel extends Model
{
    use HasFactory;
    protected $table="tbl_kota";
    protected $fillable=['kotaName'];

    public function hotel(){
        return $this->hasMany(Hotelmodel::class,'kotaid','id');
    }
}
