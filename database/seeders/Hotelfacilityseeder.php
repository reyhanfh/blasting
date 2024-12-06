<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotelfacilitymodel;

class Hotelfacilityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotelfacilitymodel::create(
        [
            "facilityName"  => "Restaurant"
        ]);
        Hotelfacilitymodel::create(
        [
            "facilityName"  => "AC"
        ]);
        Hotelfacilitymodel::create(
        [
            "facilityName"  => "Wifi"
        ]);
    }
}
