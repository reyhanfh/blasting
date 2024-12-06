<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailbookingmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_dorder';
    protected $fillable = ['idhorder','idrateplan','idhotel','kodebooking','checkin','checkout','status','namatamu','alamattamu','telpontamu','emailtamu','idnegara','adult','kid','request','baserate','discount','finalrate','promocode','updated_at','created_at'];
}
