<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'nom'=>'Doritos Barbecue Style',
                'description'=>"Doritos goût Barbecue. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "barbecue_style.jpg", 
                "prix" => 1.59,
                "boutique_id" => 1,
                "stock"=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Dippers Guacamole',
                'description'=>"Doritos dippers guacamole. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "dippers_guacamole.jpg", 
                "prix" => 1.79,
                "boutique_id" => 1,
                'stock'=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Doritos Dippers Naturel',
                'description'=>"Doritos Naturel. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "dippers_naturel.jpg", 
                "prix" => 1.39,
                "boutique_id" => 1,
                "stock"=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Doritos Flamin hot',
                'description'=>"Doritos flamin hot. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "flamin_hot.jpg", 
                "prix" => 1.59,
                "boutique_id" => 1,
                "stock"=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Doritos Nachos cheese',
                'description'=>"Doritos Nachos cheese. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "nacho_cheese.jpg", 
                "prix" => 1.29,
                "boutique_id" => 2,
                'stock'=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Doritos Pur paprika',
                'description'=>"Doritos pur paprika. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "pure_paprika.jpg", 
                "prix" => 1.59,
                "boutique_id" => 2,
                'stock'=>1,
                'created_at'=>now()

            ],
            [
                'nom'=>'Doritos Sweet chili',
                'description'=>"Doritos sweet chili. Maïs, huiles végétales (tournesol, colza, maïs, en proportion variable), base aromatisante barbecue [arôme (contient de la poudre d'oignon et de paprika), sucre, correcteurs d'acidité (diacétate de sodium, acide citrique), arôme de fumée], sel.",
                "photo"=> "sweet_chilli_pepper.jpg", 
                "prix" => 1.19,
                "boutique_id" => 2,
                'stock'=>1,
                'created_at'=>now()

            ],
        ]);
    }
}
