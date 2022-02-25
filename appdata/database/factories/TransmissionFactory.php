<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_tranz' => $this->faker->randomElement($array = array('Manuelle','Automatique')),
            'status' => '1',
        ];
    }
}
