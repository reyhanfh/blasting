<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarkotamodel extends Model
{
    use HasFactory;
    protected $table = "tbl_kota";
    protected $fillable = ['kotaName'];
}
