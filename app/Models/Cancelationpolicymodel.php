<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rateplanmodel;

class Cancelationpolicymodel extends Model
{
    use HasFactory;
    protected $table = "tbl_cancelationpolicy";
    protected $fillable = ['name','description'];

    public function rateplan()
    {
        return $this->hasMany(Rateplanmodel::class,'idpolicy','id');
    }
}
