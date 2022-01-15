<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductCouleur;
use App\Models\Category;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'category_id' => Category::all()->random(),




       'marque'=> $this->faker->randomElement($array = array(
            'Abarth','Ac','Acura','Aixam','Alfa Romeo','Alke','Allard','Alpina','Alpine',
            'Alvis','AMC','Amilcar','Arash','Ariel','AROAshok Leyland','Aston Martin','Auburn',
            'Audi','Austin','Austin Healey','Auto Union','Autobianchi','Avto','GAZ',
            'Fisker','Ford','Ford Mustang','Fuso','GAZ','Ginetta','GMC','Grecav','Gumpert',
            'Hispano Suiza','Hommell','Honda','Horch','Hummer','Hyundai','Infiniti','Innocenti','Isuzu','Iveco',
            'Jaguar','JDM Simpa','Jeep','Karma','Kia','Koenigsegg','KTM',
            'Lada','Lamborghini','Lancia','Land Rover','Lexus','Ligier','Lincoln','Lotus','Maserati',
            'Matra','Maybach','Mazda','Mc','Laren','Mega','Mercedes-Benz','MG','Mia electric','Mini','Mitsubishi',
            'Mitsuoka','Monica','Morgan','Morris','Nash','Neckar','Nissan','Noble',
            'Peugeo','Porsche','Radical','Renault','Riley','Rolls-Royce','Rover','Saab'
       )),
        'modele'=> $this->faker->numberBetween($min = 1000, $max = 9000),

        'images_1' => '',
        'images_2'=> '',
        'images_3'=> '',
        'images_4'=> '',
        'images_5'=> '',
        'images_6'=> '',


        'productcouleur_id' => ProductCouleur::all()->random(),

        'consommation'=> $this->faker->randomElement($array = array('Electrique','Moteur')),
        'carburant' =>$this->faker->randomElement($array = array('Essence','Diesel','GPL')),
        'transmission' => $this->faker->randomElement($array = array('Boite Manuelle', 'Automatique')),
        'nbrsierge' => $this->faker->randomElement($array = array('4','6')),
        'nbrvitesse' => $this->faker->randomElement($array = array('4','5')),
        'puissancemonteur' => $this->faker->buildingNumber(),
        'nbrecylindre' => $this->faker->randomElement($array = array('4','6','8')),
        'chassis' => $this->faker->numberBetween($min = 1000, $max = 9000), // 8567
        'nbrkm' => $this->faker->buildingNumber(),
        'Nbrportieretxt' => $this->faker->randomElement($array = array('deux','quatre')),
        'Nbrportiereno' => $this->faker->randomElement($array = array('2','4')),
        'annecar' => $this->faker->year($max = 'now'),
        'mordetails'=> $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        'status'=>1,
        ];
    }
}
