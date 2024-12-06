<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rateplanmodel;

class Rateplanavaibilitymodel extends Model
{
    use HasFactory;
    protected $table = "tbl_rateplanavaibility";
    protected $fillable = ['idrateplan','allotment','from','to','created_at','updated-at'];

    public function rateplan()
    {
        return $this->belongsTo(Rateplanmodel::class,'idrateplan','id');
    }

}
