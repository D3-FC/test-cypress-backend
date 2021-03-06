<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AddTestingUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Honda jazz',
            'email'    => 'honda@mail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
