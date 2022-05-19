<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnswererSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answerer::factory()->count(20)->create();  
    }
    
}
