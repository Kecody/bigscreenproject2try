<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FormSeeder;
use Database\Seeders\AnswerSeeder;
use Database\Seeders\AnswererSeeder;
use Database\Seeders\QuestionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FormSeeder::class,
            QuestionSeeder::class,
            AnswererSeeder::class,
            AnswerSeeder::class
        ]);
    }
}
