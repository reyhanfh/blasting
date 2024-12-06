<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Refkotamodel;

class Refkotamodelseeder extends Seeder
{

    public function run()
    {
        Refkotamodel::create(
            [
            'kotaName'  => 'Jakarta'
            ]
        );
        Refkotamodel::create(
            [
                'kotaName'  => 'Bandung'
            ]
        );
        Refkotamodel::create(
            [
                'kotaName'  => 'Bali'
            ]
        );
    }
}
