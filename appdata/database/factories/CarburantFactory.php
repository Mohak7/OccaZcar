<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarburantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->randomElement($array = array('Essence','Diesel','Metanne')),
            'status' => '1',
        ];
    }
}
