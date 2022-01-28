<?php

namespace Database\Factories;


use App\Models\Produits;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoproduitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'produits_id'  => Produits::all()->random(),
			'photoname' => $this->faker->randomElement($array = array('image1.jpg','image2.jpg','image3.jpg','image4.jpg')),
            
        ];
    }
}
