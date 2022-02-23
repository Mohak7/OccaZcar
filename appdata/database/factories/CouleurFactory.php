<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouleurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_color' => $this->faker->randomElement($array = array('rouge','Jaune','Noir','Blanc')),
            'code_color' => $this->faker->randomElement($array = array('red','yellow','black','#ffff')),
            'status' => '1',
        ];
    }
}
