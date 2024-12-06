<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accomodationtypemodel;

class Accomodationmodeltypeseeder extends Seeder
{
    
    public function run()
    {
        Accomodationtypemodel::create([
            'accomodationname'  => 'Hotel',
        ]);
        Accomodationtypemodel::create([
            'accomodationname'  => 'Apartment',
        ]);
    }
}
