<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'title'=>'Bigscreen',
            'description'=>'Sondage casque de réalité virtuel',
            'formtoken'=> Str::random(40),
            'status'=>true
        ]);
    }
}
