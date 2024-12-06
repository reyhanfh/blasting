<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cancelationpolicymodel;
use App\Models\Roomtypemodel;
use App\Models\Rateplanhotelmodel;
use App\Models\Rateplanavaibilitymodel;

class Rateplanmodel extends Model
{
    use HasFactory;
    protected $table='tbl_rateplan';
    protected $fillable=['name','idhotel','idroom','description','idpolicy','basarate','variable','variableamount','rate','fixrate','minLOS','maxLOS'];

    public function cancelation()
    {
        return $this->belongsTo(Cancelationpolicymodel::class,'idpolicy','id');
    }

    public function rateplanhotel()
    {
        return $this->hasMany(Rateplanhotelmodel::class,'idrateplan','id');
    }

    public function avaibility()
    {
        return $this->hasOne(Rateplanavaibilitymodel::class,'idrateplan','id');
    }
}
