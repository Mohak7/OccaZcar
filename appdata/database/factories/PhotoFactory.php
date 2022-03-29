<?php

namespace Database\Factories;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicule_id' => Vehicule::all()->random(),
            'imgphoto' => $this->faker->randomElement($array = array('images11.jpeg','download.jpeg')),
            'status' => '1',



        ];
    }
}
