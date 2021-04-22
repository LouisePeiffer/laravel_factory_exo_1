<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batiments')->insert([
            [
                "nom" => "Molengeek",
                "texte" => "Le bâtiment de Molengeek a été crée en 2015.",
                "created_at"=> now(),
            ]
        ]);
    }
}
