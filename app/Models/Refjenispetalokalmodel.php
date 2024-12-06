<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Referensi\Petalokasimodel;

class Refjenispetalokalmodel extends Model
{
    use HasFactory;
    protected $table = 'tbl_jenispetalokal';
    protected $fillable = ['jenislokasiName','jenislokasiPhoto','aktif'];

    public function petalokal()
    {
        return $this->hasMany(Petalokasimodel::class,'kategoriid','id');
    }
}
