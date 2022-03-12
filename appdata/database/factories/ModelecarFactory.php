<?php

namespace Database\Factories;

use App\Models\Marque;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelecarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marque_id'  => Marque::all()->random(),
            'nom_modele' => $this->faker->randomElement($array = array('Lada','Lamborghini','Lancia','Land Rover','Lexus','Ligier','Lincoln','Lotus','Maserati',
                'Matra','Maybach','Mazda','Mc','Laren','Mega','Mercedes-Benz','MG','Mia electric','Mini','Mitsubishi',
                'Mitsuoka','Monica','Morgan','Morris','Nash','Neckar','Nissan','Noble',
                'Peugeo','Porsche','Radical','Renault','Riley','Rolls-Royce','Rover','Saab'
            )),
            'status' => '1',
        ];
    }
}
