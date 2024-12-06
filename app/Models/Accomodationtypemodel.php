<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotelmodel;

class Accomodationtypemodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_acomodationtype';
    protected $fillable = ['accomodationname','isactive'];

    public function hotel(){
        return $this->hasMany(Hotelmodel::class,'accomodationtypeid','id');
    }
}
