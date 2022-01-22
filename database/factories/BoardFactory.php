<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => mb_strtoupper($this->faker->lexify('???'))."-".$this->faker->numerify('####')
        ];
    }
}
