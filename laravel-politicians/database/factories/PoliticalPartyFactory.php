<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliticalPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->lexify('????'),
            'country_id'=>$this->faker->numberBetween($min=1,$max=7)
        ];
    }
}
