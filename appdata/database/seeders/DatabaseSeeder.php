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
    }
}
