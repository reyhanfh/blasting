<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roomamenitiesmodel;

class Amenitiesmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_aminities';
    protected $fillable = ['name'];

    public function roomamenities()
    {
        return $this->hasMany(Roomamenitiesmodel,'idamenities','id');
    }
}
