<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commandes')->insert([
            [
                "panier_id"=>1,
                "total"=>1.19
            ],
            [
                "panier_id"=>2,
                "total"=>1.39
            ],
        ]);
    }
}
