<?php

namespace Database\Factories;

use App\Models\Annonce;
use App\Models\Carburant;
use App\Models\Couleur;
use App\Models\Modelecar;
use App\Models\Transmission;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'annonce_id' => Annonce::all()->random(),
        'modelecar_id' => Modelecar::all()->random(),
        'couleur_id' => Couleur::all()->random(),
        'transmission_id' => Transmission::all()->random(),
        'carburant_id' => Carburant::all()->random(),
        'kilomettre'=> $this->faker->buildingNumber(),
        'annee' => $this->faker->year($max = 'now'),
        'prix'=> $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'description' =>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
        'first_proprio' =>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
        'status' => '1',
        ];
    }
}
