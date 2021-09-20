<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AddTestingUser2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Honda jazz 2',
            'email'    => 'honda2@mail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
