<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Database\Factories\EleveFactory;
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
        // méthode SEEDER
        $this->call([
            BatimentSeeder::class,
            FormationSeeder::class,
            TypeFormationSeeder::class,
        ]);
        // méthode FACTORY
        Eleve::factory()->count(50)->create();
    }
}
