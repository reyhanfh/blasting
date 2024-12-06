<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingdetailmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_bookingdetail';
    protected $fillable = ['idbooking','idrateplan','rate','jumlah','night'];
}
