<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_jobs';
    protected $fillable = ['id','idhotel',
    'jobs','departement','persyaratan'];
}
