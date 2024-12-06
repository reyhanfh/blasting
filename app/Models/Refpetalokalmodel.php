<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Refjenispetalokalmodel;

class Refpetalokalmodel extends Model
{
    use HasFactory;
    protected $table='tbl_petalokal';
    protected $fillable = ['jenislokasiid','idkota','lokasiName','lokasiphoto','aktif'];

    public function jenispetalokal()
    {
        return $this->belongsTo(Refjenispetalokalmodel::class,'jenislokasiid','id');
    }


}
