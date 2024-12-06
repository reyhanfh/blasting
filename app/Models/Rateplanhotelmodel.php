<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rateplanmodel;
use App\Models\Hotelmodel;

class Rateplanhotelmodel extends Model
{
    use HasFactory;
    protected $table="tbl_rateplanhotel";
    protected $fillable = ['ihotel','idrateplan'];

    public function rateplan()
    {
        return $this->belongsTo(Rateplanmodel::class,'idrateplan','id');
    }
}
