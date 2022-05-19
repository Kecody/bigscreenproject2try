<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email'=> 'admin@bigscreen.com',
            'name'=> 'admin',
            'password'=> Hash::make('VRquiz'),
            // 'role' => User::ADMIN_ROLE,
        ]);
    }
}
