<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nom'=> 'Hmn',
                'prenom'=> 'Jamila',
                'photo'=> 'avatar.jpg',
                'email'=> 'jamila@gmail.com',
                'password'=> Hash::make('testtest'),

            ],
            [
                'nom'=> 'Ach',
                'prenom'=> 'acheteur',
                'photo'=> 'avatar.jpg',
                'email'=> 'acheteur@gmail.com',
                'password'=> Hash::make('testtest'),

            ],
            [
                'nom'=> 'Ntb',
                'prenom'=> 'Bene',
                'photo'=> 'avatar2.jpg',
                'email'=> 'bene@gmail.com',
                'password'=> Hash::make('testtest'),

            ],
        ]);
    }
}
