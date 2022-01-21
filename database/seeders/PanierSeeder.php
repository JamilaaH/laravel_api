<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paniers')->insert([
            [
                "user_id" => 1,
                "produit_id"=> 7,
                'created_at'=>now()

            ],
            [
                "user_id" => 1,
                "produit_id"=> 5,
                'created_at'=>now()

            ],
        ]);
    }
}
