<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'gender'=>$this->faker->numberBetween($min = 1, $max = 2),
            'political_party_id'=>$this->faker->numberBetween($min = 1, $max = 10)
        ];
    }
}
