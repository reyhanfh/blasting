<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelgalerymodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_hotelgallery';
    protected $fillable = ['idhotel','panjang','lebar','file'];
}
