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
          'couleurproduc' => $this->faker->randomElement($array = array('rouge','Jaune','Noir','Blanc')),
          'status' => '1',
        ];
    }
}
