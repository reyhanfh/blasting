<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usergroup;

class Usergroupseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usergroup::Create
        (
            [
                'namaGroup' => 'Administrator',
            ]
        );
    }
}
