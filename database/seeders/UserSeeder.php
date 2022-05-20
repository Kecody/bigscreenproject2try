<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Hash;

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
