<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NbrevitesseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->randomElement($array = array('4','5')),
            'attribut_29' =>'Default',
            'status' => '1',
        ];
    }
}
