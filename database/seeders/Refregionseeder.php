<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Refregionmodel;

class Refregionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Refregionmodel::create(
            [
                'regionName'    => 'Sumatra',
            ]
        );
        Refregionmodel::create(
            [
                'regionName'    => 'DKI Jakarta',
            ]
        );
        Refregionmodel::create(
            [
                'regionName'    => 'Jawa Barat',
            ]
        );
        Refregionmodel::create(
            [
                'regionName'    => 'Jawa Tengah',
            ]
        );
        Refregionmodel::create(
            [
                'regionName'    => 'Jawa Timur',
            ]
        );
        Refregionmodel::create(
            [
                'regionName'    => 'Indonesia Timur',
            ]
        );
    }
}
