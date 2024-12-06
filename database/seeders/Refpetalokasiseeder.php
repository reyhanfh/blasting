<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Refpetalokalmodel;

class Refpetalokasiseeder extends Seeder
{
    
    public function run()
    {
        Refpetalokalmodel::create([
            'jenislokasiid' => 1,
            'lokasiName'    => 'Kantor Pusat PT Angin Ribut',
        ]);
        Refpetalokalmodel::create([
            'jenislokasiid' => 1,
            'lokasiName'    => 'Kantor Pusat PT Hujan Badai',
        ]);
        Refpetalokalmodel::create([
            'jenislokasiid' => 3,
            'lokasiName'    => 'RSU Fatmawati',
        ]);
        Refpetalokalmodel::create([
            'jenislokasiid' => 3,
            'lokasiName'    => 'RS Bromeus',
        ]);
    }
}
