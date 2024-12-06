<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourpromomodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_ourpromo';
    protected $fillable = ['name','photo'];
}
