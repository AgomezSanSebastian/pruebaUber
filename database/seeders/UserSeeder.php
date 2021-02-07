<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'adri',            
            'email' => 'ad@ad',
            'password' => '1',
            'address' => 'Huelva',
            'mobile' => '567123123',
            'type' => 'señor',            
        ]);

        DB::table('users')->insert([
            'name' => 'pepe',            
            'email' => 'pepe@ad',
            'password' => '1',
            'address' => 'Sevilla',
            'mobile' => '167123123',
            'type' => 'señor',            
        ]);

        DB::table('users')->insert([
            'name' => 'maria',            
            'email' => 'maria@ad',
            'password' => '1',
            'address' => 'Huelva',
            'mobile' => '267123123',
            'type' => 'señora',            
        ]);

        DB::table('users')->insert([
            'name' => 'Sussan',            
            'email' => 'sussa@ad',
            'password' => '1',
            'address' => 'Cadiz',
            'mobile' => '367124123',
            'type' => 'señora',            
        ]);

        DB::table('users')->insert([
            'name' => 'adri',            
            'email' => 'ad2@ad',
            'password' => '1',
            'address' => 'Huelva',
            'mobile' => '563123123',
            'type' => 'señor',            
        ]);

        DB::table('users')->insert([
            'name' => 'Marta',            
            'email' => 'marta@ad',
            'password' => '1',
            'address' => 'Huelva',            
            'mobile' => '567823123',
            'type' => 'señora',            
        ]);
    }
}
