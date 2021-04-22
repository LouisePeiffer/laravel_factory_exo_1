<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom"=>"Coding School",
                "texte"=>"La coding school va vous permettre de devenir des full stack developer",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Marketing Lab",
                "texte"=>"La Marketing Lab va vous apprendre à devenir des rois du marketing duh",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Photoshop TIC",
                "texte"=>"Apprenez à retoucher vos photos comme des pros!",
                "created_at"=>now(),
            ],
            [
                "nom"=>"AWS",
                "texte"=>"Le Cloud computing est en plein essor et a besoin de toi pour continuer à se développer !",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Google Ads",
                "texte"=>"Apprends à générer des campagnes de fou en utilisant les bons ads, je sais pas de quoi je parle lalala",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Réseaux sociaux",
                "texte"=>"Instagram oslm",
                "created_at"=>now(),
            ],
        ]);
    }
}
