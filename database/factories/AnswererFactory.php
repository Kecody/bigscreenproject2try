<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnswererFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'token'=> $this->faker->unique(),
                'user_email' => $this->faker->unique()->safeEmail(),
            ];
    }
}
