<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoutiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boutiques')->insert([
            [
                'nom' =>"La boutique de Mila",
                'user_id'=>1, 
                'created_at'=>now()
            ],
            [
                'nom' =>"La boutique de Bene",
                'user_id'=>2, 
                'created_at'=>now()
            ],
        ]);
    }
}
