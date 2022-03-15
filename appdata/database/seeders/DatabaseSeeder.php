<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Couleur::factory(20)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Transmission::factory(3)->create();
        \App\Models\Marque::factory(28)->create();
        \App\Models\Nbrevitesse::factory(3)->create();
        \App\Models\Carburant::factory(10)->create();
        \App\Models\Annonce::factory(30)->create();
        \App\Models\Modelecar::factory(28)->create();
        \App\Models\Vehicule::factory(228)->create();
    }
}
