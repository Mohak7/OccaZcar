<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCouleurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nameprodcolor' => $this->faker->randomElement($array = array('rouge','Jaune','Noir','Blanc')),
          'codecolor' => $this->faker->randomElement($array = array('red','yellow','black','#ffff')),
          'status' => '1',
        ];
    }
}
