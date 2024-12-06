<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Refjenispetalokalmodel;

class Refjenispetalokalseeder extends Seeder
{
    public function run()
    {
        Refjenispetalokalmodel::create(
        [
            "jenislokasiName"  => "Perkantoran"
        ]);
        Refjenispetalokalmodel::create(
        [
            "jenislokasiName"  => "Pertokoan"
        ]);
        Refjenispetalokalmodel::create(
        [
            "jenislokasiName"  => "Rumah Sakit"
        ]);
        Refjenispetalokalmodel::create(
        [
            "jenislokasiName"  => "Kampus"
        ]);
    }
}
