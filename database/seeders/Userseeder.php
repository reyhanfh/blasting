<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create
        (
            [
                'name'      => 'admin',
                'email'     => 'admin@organisation.com',
                'password'  => bcrypt('12345'),
                'idgroup'   => 1,
                'status'    => 'active',
            ]
        );
    }
}
