<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_id'=> $this->faker,
            'answerer_id'=> $this->faker,
            'answer' => $this->faker->sentence(),
        ];
    }
}
