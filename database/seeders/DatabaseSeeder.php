<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Hotelfacilityseeder::class);
        $this->call(Refjenispetalokalseeder::class);
        $this->call(Refregionseeder::class);
        $this->call(Refkotamodelseeder::class);
        $this->call(Refpetalokasiseeder::class);
        $this->call(Usergroupseeder::class);                
        $this->call(Userseeder::class);
        $this->call(Accomodationmodeltypeseeder::class);
    }
}
