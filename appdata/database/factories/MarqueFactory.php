<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MarqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_marque' => $this->faker->randomElement($array = array(
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
            'status' => '1',
        ];
    }
}
