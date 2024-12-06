<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomgallerymodel extends Model
{
    use HasFactory;
    protected $table = "tbl_roomgallery";
    protected $fillable = ['idroom','panjang','lebar','file'];
}
