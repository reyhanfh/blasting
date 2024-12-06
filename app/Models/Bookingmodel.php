<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_booking';
    protected $fillable = ['tanggal','idhotel','firstname','lastname','email','phone','address','kota','negara','zipcode','cdchannel','paymentstatus'];
}
