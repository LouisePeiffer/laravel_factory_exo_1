<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "nom"=>"Courtes, TIC",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Longues",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Intéressantes",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Chiantes",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Enrichissantes",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Pas si ouf",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Trop cool",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Longuet",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Nouvelle",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Vielle",
                "created_at"=>now(),
            ],
        ]);
    }
}
