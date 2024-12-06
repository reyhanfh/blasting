<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model
{
    use HasFactory;
    protected $table = 'tbl_usergroup';
    protected $fillable = ['namaGroup','deskripsi'];

    public function user()
    {
        return $this->hasMany(User::class,'idgroup','id');
    }
}
