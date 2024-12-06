<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelmodel;

class Brandmodel extends Model
{
    use HasFactory;
    protected $table = "tbl_brand";
    protected $fillable = ["brandname","logo","aktif"];

    public function hotel(){
        return $this->hasMany(Hotelmodel::class,'brandid','id');
    }
}
