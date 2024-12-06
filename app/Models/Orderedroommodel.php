<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderedroommodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_dorderroom';
    protected $fillable = ['iddorder','tanggal','idroomtype','idhotel','updated_at','created_at'];
}
